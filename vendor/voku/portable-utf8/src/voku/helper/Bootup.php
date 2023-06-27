<?php

namespace voku\helper;

use Patchwork\PHP\Shim\Normalizer;

/**
 * Class Bootup
 *
 * this is a bootstrap for the polyfills (iconv / intl / mbstring / normalizer / xml)
 *
 * @package voku\helper
 */
class Bootup
{
  /**
   * bootstrap
   */
  public static function initAll()
  {
    \Patchwork\Utf8\Bootup::initAll();
  }

  /**
   * Get random bytes
   *
   * @ref https://github.com/paragonie/random_compat/
   *
   * @param  int $length Output length
   *
   * @return  string|false false on error
   */
  public static function get_random_bytes($length)
  {
    if (!$length) {
      return false;
    }

    $length = (int)$length;

    if ($length <= 0) {
      return false;
    }

    return random_bytes($length);
  }

  /**
   * Determines if the current version of PHP is equal to or greater than the supplied value
   *
   * @param  string
   * @param string $version
   *
   * @return  bool  TRUE if the current version is $version or higher
   */
  public static function is_php($version)
  {
    static $_is_php;

    $version = (string)$version;
    if (!isset($_is_php[$version])) {
      $_is_php[$version] = version_compare(PHP_VERSION, $version, '>=');
    }

    return $_is_php[$version];
  }

  /**
   * filter request-uri
   *
   * @param null $uri
   * @param bool $exit
   *
   * @return bool|mixed|null
   */
  public static function filterRequestUri($uri = null, $exit = true)
  {
    if (!isset($uri)) {
      if (!isset($_SERVER['REQUEST_URI'])) {
        return false;
      } else {
        $uri = $_SERVER['REQUEST_URI'];
      }
    }

    // Ensures the URL is well formed UTF-8
    // When not, assumes Windows-1252 and redirects to the corresponding UTF-8 encoded URL

    if (!preg_match('//u', urldecode($uri))) {
      $uri = preg_replace_callback(
          '/[\x80-\xFF]+/',
          function ($m) {
            return urlencode($m[0]);
          },
          $uri
      );

      $uri = preg_replace_callback(
          '/(?:%[89A-F][0-9A-F])+/i',
          function ($m) {
            return urlencode(UTF8::encode('UTF-8', urldecode($m[0])));
          },
          $uri
      );

      if ($exit === true) {
        // Use ob_start() to buffer content and avoid problem of headers already sent...
        if (headers_sent() === false) {
          $severProtocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.1');
          header($severProtocol . ' 301 Moved Permanently');
          header('Location: ' . $uri);
          exit();
        }
      }
    }

    return $uri;
  }

  /**
   * filter request inputs
   *
   * Ensures inputs are well formed UTF-8
   * When not, assumes Windows-1252 and converts to UTF-8
   * Tests only values, not keys
   *
   * @param int    $normalization_form
   * @param string $leading_combining
   */
  public static function filterRequestInputs($normalization_form = 4 /* n::NFC */, $leading_combining = '◌')
  {
    $a = array(
        &$_FILES,
        &$_ENV,
        &$_GET,
        &$_POST,
        &$_COOKIE,
        &$_SERVER,
        &$_REQUEST,
    );

    /** @noinspection ReferenceMismatchInspection */
    foreach ($a[0] as &$r) {
      $a[] = array(
          &$r['name'],
          &$r['type'],
      );
    }
    unset($r);
    unset($a[0]);

    $len = count($a) + 1;
    for ($i = 1; $i < $len; ++$i) {
      /** @noinspection ReferenceMismatchInspection */
      foreach ($a[$i] as &$r) {
        /** @noinspection ReferenceMismatchInspection */
        $s = $r; // $r is a ref, $s a copy
        if (is_array($s)) {
          $a[$len++] = & $r;
        } else {
          $r = self::filterString($s, $normalization_form, $leading_combining);
        }
      }
      unset($r);
      unset($a[$i]);
    }
  }

  /**
   * @param        $s
   * @param int    $normalization_form
   * @param string $leading_combining
   *
   * @return array|bool|mixed|string
   */
  public static function filterString($s, $normalization_form = 4 /* n::NFC */, $leading_combining = '◌')
  {
    if (false !== strpos($s, "\r")) {
      // Workaround https://bugs.php.net/65732
      $s = str_replace(array("\r\n", "\r"), "\n", $s);
    }

    if (preg_match('/[\x80-\xFF]/', $s)) {
      if (Normalizer::isNormalized($s, $normalization_form)) {
        $n = '-';
      } else {
        $n = Normalizer::normalize($s, $normalization_form);
        if (isset($n[0])) {
          $s = $n;
        } else {
          $s = UTF8::encode('UTF-8', $s);
        }
      }

      if ($s[0] >= "\x80" && isset($n[0], $leading_combining[0]) && preg_match('/^\p{Mn}/u', $s)) {
        // Prevent leading combining chars
        // for NFC-safe concatenations.
        $s = $leading_combining . $s;
      }
    }

    return $s;
  }
}
