# 安卓端接口说明
## 一、接口数据返回标准
   ```json
  {
    "error": 0,
    "msg": "数据获取成功",
    "data": [
    ]
  }
   ```
- `error` 返回错误码  200成功 其他为失败（例如500）
- `msg` 接口响应信息
- `data` 接口响应数据

## 二、接口详细说明
#### 1. 用户注册
##### 请求地址
    /android/register

##### 请求方式
    POST

#####  请求参数
- `phone` 手机号
- `passwd` 密码，要求八位数以上
- `name` 用户名，如果不填自动由后端随机生成
- `verifyCode` 验证码

#### 2. 验证码获取
##### 请求地址
    /android/getCode

##### 请求方式
    GET

#####  请求参数
- `phone` 手机号


#### 3. 用户登录
##### 请求地址
    /android/login

##### 请求方式
    GET

#####  请求参数
- `phone` 手机号
- `passwd` 用户密码

#####  响应参数
- `uid` 用户id
- `name` 用户名
- `class` 用户等级
- `className` 用户等级名
- `email` 邮箱
- `class_left_days` 会员剩余天数
- `residualFlow` 剩余流量 (GB)
- `usedTrafficGB` 已用流量 (GB)
- `money` 余额

#### 4.退出登录 
##### 请求地址
    /android/logout
##### 请求方式
    GET
#####  请求参数
    无


#### 5. 获取节点列表
##### 请求地址
    /android/node
##### 请求方式
    GET
##### 请求参数
    无
##### 响应参数


#### 6. 获取商品列表
##### 请求地址
    /android/shop
##### 请求方式
    GET
##### 请求参数
    无
##### 响应参数
- `id` 商品id
- `price` 购买价格
- `class` 购买等级
- `class_expire` 等级过期时间
- `bandwidth` 套餐流量，单位GB
- `connect` 设备限制梳理，0为无限制，其他数字为限制数量
- `speedlimit` 速率 ， 0为无限制，其他数字为限制速率
- `reset` 0为到期清零，其他数字为xx天清零



#### 6. 购买商品
##### 请求地址
    /user/payment/purchase
##### 请求方式
    POST
##### 请求参数
示例
 ```json
 {
  "price":"1.00",
  "type": "pay_alipay",
  "client": "Android",
  "shopid": 1,
  "shopauto": 0,
  "shopcoupon": ""
}
 ```
- `price` 金额
- `type` 购买方式，暂时传pay_alipay
- `client` 客户端，传Android
- `shopid` 商品id
- `shopauto` 自动续费，0否1是
- `shopcoupon` 优惠码

##### 响应参数
- `paytype` 支付方式
- `ret` 响应码
- `tradeno` 订单编号
- `type` 支付类型
- `url` 支付地址


#### 7. 使用优惠码
##### 请求地址
    /user/coupon_check
##### 请求方式
    POST
##### 请求参数
- `coupon` 金额
- `shop` 商品 id

##### 响应参数

- `credit` 优惠比例
- `money` 余额
- `name` 商品名
- `need` 商品id
- `ret` 响应码
- `total` 金额


#### 8. 检测用户支付状态
##### 请求地址
   /payment/status
##### 请求方式
    POST
##### 请求参数
- `tradeno` 订单编号
- `checkshop` 商品id

##### 响应参数

- `buyshop` 是否购买
- `result` 购买成功后，返回购买套餐信息
- `ret` 响应码
