# 邮件示例

使用`laravel`框架， 文档在  https://learnku.com/docs/laravel/8.x

邮件是网易的 提供 的
密码是: 12345678rr
账号是： helloworlddev@163.com
授权码是:YSPHALPWNDBNLBII

## 启动说明
``` bash 
$ composer install # 安装依赖 
// 然后直接上线nginx 或 apache 就行了
$ php artisan serve # 也可以本地直接启动
```

## 邮件接口说明 
```angular2html
url: /api/mail
method: post
data: {"email": "2831473954@qq.com" }
```
最终响应为:
``` json
{
    "isSuccess": true
}
```
