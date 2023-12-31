# Laravel 10 允許登出其他裝置上使用中的瀏覽頁工作階段

引入 cjmellor 的 browser-sessions 套件來擴增允許登出其他裝置上使用中的瀏覽頁工作階段，如果您在其他裝置上登入，或者您讓其他人使用您的帳戶，或者您忘記從公共電腦上登出，您可能會發現此功能很有用。如果您在帳戶中發現可疑的設備活動，它會特別有用。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/hXRGmZb.png)
> 如果您對登入裝置沒有印象，或帳戶中有不尋常的活動
