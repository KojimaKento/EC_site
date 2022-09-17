# アプリ
### クリエイター向けのECサイト
# 概要
このアプリでは、クリエイターのデジタルデータを出品、購入できるECサイトです。デジタルもモノを中心に扱っているECサイトです。
# 制作背景(意図)
このクリエイター向けのデジタルデータのECサイトを作成した背景には２つの理由があります。<br>
1つ目はクリエイターがマネタイズできる手段を増やすです。クリエイター（絵本作家、アーティスト、漫画家など）の主な収益として物販と完成した作品だと思います。主にその２つのモノで作品に必要なお金やクリエイターの生活費にあてられると思います。その２つのモノ以外に収益を生み出すことができれば、創作できる作品にあてられる金額をあげることができそれに伴って作品の質をあげることができること、クリエイターの生活費に活かせるなどメリットが増えると思います。なので、新たな収益を生み出す１つの手段として「作品の制作過程の販売」があると思います。制作過程で生まれるモノとして、音楽では世には出ていないが候補として出ていたBタイプ、制作過程の風景・動画、イラスト・アニメなどがあると思います。こういったモノはファンにとっては価値があるモノだと思うので、クリエイターの収益に繋げられると思いました。<br>
２つ目はデジタルデータに着目しました。近年、NFTなどのデジタルのモノに価値があり販売などがされています。なので、アナログのモノのみでなくデジタルといった形も販売の形としては可能性があると感じています。また、デジタルデータであれば出品するにもサクッと出品できる手軽さもあります。
# DEMO
## トップページ
![トップページ](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/fd64ad1a912cc1f2fdbb94e026297f55.gif)<br>
クリエイターの出品された作品が表示されます。作品には、出品個数、金額が表示されています。作品をクリックするとその作品の詳細画面に遷移します。検索蘭がありますが、今後クリエイターや作品を検索できるように機能を作成する予定です。
## 新規登録画面
![新規登録画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/951ede5d479daace4bef7e5ae1fddd9b.jpg)<br>
名前、メールアドレス、ユーザーネーム、パスワード、確認用パスワードで登録することができます。
## ログイン画面
![ログイン画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/3af49f62089c329434e912b2f87f96e9.jpg)<br>
すでに登録してあるユーザーが、メールアドレスとパスワードでログインすることができます。
## 作品詳細画面
![作品詳細画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/485e3cefbfd63cb42102c2a6ef35603b.gif)<br>
その作品のタイトル、出品数、金額、作品に込めた想いが記載されています。また、ファンの応援という意味も込めて実際にクリエイターに入る金額も表示しています。
## 購入画面
![購入画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/f7ef905fc94104445fc5afadbb4cc3b1.gif)<br>
購入画面には、作品のタイトル、作品、個数選択、金額が表示されています。購入確認ボタンをクリックすると購入確認画面に遷移します。
## 購入確認画面
![購入確認画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/2eb2f2f4a35598fbb033f8ef1c2fb42a.gif)<br>
その購入予定の作品の、タイトル、作品、金額が表示されます。購入するボタンをクリックすると購入が完了し、購入完了画面に遷移します。
## 購入完了画面
![購入完了画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/23fc35a9775192bd69db2aef26286b90.png)<br>
作品の購入が完了し完了画面に遷移します。
## ユーザーマイページ
![ユーザーマイページ](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/cea6222420c44882a8ff9b339f00c589.gif)<br>
ログインしているユーザーのユーザー名、クリエイター名（職種）、プロフィールが表示されています。「作品を出品する」をクリックすれば、作品出品画面に遷移します。「出品一覧へ」をクリックすれば、ログインしている作品出品一覧画面に遷移します。「購入一覧へ」をクリックすれば、ログインしている作品購入一覧画面に遷移します。
## ユーザー情報編集画面
![ユーザ情報編集画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/47cc62d13d87000c6c73fafce1e94197.gif)<br>
ログインしているユーザーのユーザー名、クリエイター名（職種）、プロフィールを編集することができます。
## 作品出品画面
![作品出品画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/5a212b62f22335ed6d6b0acac14b199a.gif)<br>
出品する作品のタイトル、デジタルデータ、金額、出品個数、作品への想いを入力できます。タイトルは20文字以内、金額は数字・500円以上、個数には数字・1個以上、作品説明は255文字以内でそれぞれバリデーションをかけています。
## 作品出品確認画面
![作品出品確認画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/1a6114e3ec79bfde3a68b6a1741dee4b.gif)<br>
出品画面で入力した、タイトル、作品、金額、出品個数、作品説明が表示されます。「出品する」ボタンをクリックすれば出品が完了し、出品完了画面に遷移します。
## 作品出品完了画面
![作品出品完了画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/504ff075e62fc24f5dc041b24a290934.gif)<br>
出品が完了し、出品しましたとの記載がされています。
## 作品出品一覧画面
![作品出品一覧画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/d052a415bca788d0ec4fc39bbf063738.gif)<br>
ログインしているユーザーが出品した作品が一覧として表示されます。作品をクリックすればその作品の詳細画面に遷移します。
## 作品購入一覧画面
![作品購入一覧画面](https://github.com/KojimaKento/EC_site/blob/master/public/gyazo/38b4e06c1b11fb6161327565a462e3cf.gif)<br>
ログインしているユーザーが購入した作品が一覧として表示されます。作品をクリックすればその作品の詳細画面に遷移します。
# 使用技術（開発環境）
## バックエンド
PHP,Laravel
## フロントエンド
HTML,CSS
## データベース
MySQL
## ソース管理
GitHub
## エディタ
VScode
## サーバー
Docker
# 課題や今後実装したい機能
- クリエイター名や作品の検索機能
- 各クリエイターのユーザー画面
# DB設計
## usersテーブル
|Column|Type|Options|
|------|----|-------|
|id|bigint(20) unsigned|null: NO|
|name|varchar(255)|null: NO|
|email|varchar(255)|null: NO|
|email_verified_at|timestamp|null: YES|
|password |varchar(255)|null: NO|
|remember_token|varchar(100)|null: YES|
|created_at|timestamp|null: YES|
|updated_at|timestamp|null: YES|
|username|varchar(255)|null: NO|
|profile|text|null: YES|
|admin|int(11)|null: YES|
|creator_type|varchar(255)|null: YES|
## Association
- has_many :listings
- has_many :buys

## listingsテーブル
|Column|Type|Options|
|------|----|-------|
|id|bigint(20) unsigned|null: NO|
|user_id|int(11)|null: YES|
|title|text|null: NO|
|file_name|varchar(255)|null: NO|
|listing_data|varchar(255)|null: NO|
|price|int(11)|null: NO|
|listing_quantity|text|null: NO|
|explanation|text|null: NO|
|created_at|timestamp|null: YES|
|updated_at|timestamp|null: YES|
## Association
- belongs_to :user

## buysテーブル
|Column|Type|Options|
|------|----|-------|
|id|bigint(20) unsigned|null: NO|
|user_id|int(11)|null: NO|
|listing_id|int(11)|null: NO|
|bought_title|text|null: NO|
|bought_data|varchar(255)|null: NO|
|bought_price|int(11)|null: NO|
|bought_quantity|varchar(255)|null: YES|
|created_at|timestamp|null: YES|
|updated_at|timestamp|null: YES|
## Association
- belongs_to :user
