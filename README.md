http://qiita.com/yousan/items/df3650e52ffe868b982e

# はじめに
「Facebookのイイネ数が取れなくなったんだけど」というお話しがきました。
どうやら最近のアップデートなどで取得できなくなったようです。
FacebookのAPI周りはこまめにアップデートされていて、仕様変更などによって取れなくなることがあります。今回の変更(というか古いバージョンの廃止?)は2016年9月ごろにあったとのことでした。


# App IDとシークレット
シェア数を取得するためにはApp ID（アプリID）とシークレットが必要となりました。

下記の参考サイトに従ってFacebook Appを作成し、App IDとシークレットを取得しました。

> http://wp-suzaku.com/2016/02/01/【2016年版】facebook-app-id（アプリid）の取得方法/
> http://itevangelist.net/blog/wordpress-facebook-developers-resgitration-and-add-app

<img width="807" alt="Screenshot_9_7_16__6_30_AM.png" src="https://qiita-image-store.s3.amazonaws.com/0/47327/0de2cb6b-8c95-5818-e694-385b0e317ba2.png">



# Facebook API
Facebook APIなるものを利用することになります。

> https://developers.facebook.com/tools/explorer

ここにログインすると色々と試すことができます。
GETリクエストでだいたい何でもできるようです。

> https://developers.facebook.com/docs/graph-api/reference/v2.7/url

公式のサンプルです。


# Facebook APIの利用期限

Facebook APIは使用期限があるようです。

<img width="704" alt="Screen Shot 2016-09-21 at 9.51.15 AM.png" src="https://qiita-image-store.s3.amazonaws.com/0/47327/8353472e-15e3-84ac-b1bd-d223b7994273.png">

> https://developers.facebook.com/docs/apps/changelog

今回は最新のv2.7を利用したので延長がなければ2年弱は問題なく使える予定です。
逆に言うと2年経つと使えなくなる可能性があるので注意が必要ですね。

# その他
Facebookのイイネ数、シェア数を取得するコードはそこそこ見つかったのですが、APIの使用期限の関連性もあって使えないコードも多くて、思ったより時間を使いました。
APIがバージョンによって廃止になっていることが原因だったようでした。
あと公式ライブラリがあるようですが使い切れませんでした。機会があればそっちも是非やってみたいですね。
