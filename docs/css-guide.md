# CSSのルール

下記の記事を参考にしてルールを定めました。
🔗 [こんなHTMLとCSSのコーディング規約で書きたい - Qiita](https://qiita.com/pugiemonn/items/964203782e1fcb3d02c3)


## ページ構成

```
## 基礎
.container (全てのブロック内で使われる)


## ヘッダー
.header 
  .header__main
    .container
      .header__inner
        .header__logo
        .pc-gnav ## PC用グローバルナビ
          .menu (WordPressが生成する)
            li
            .sub-menu
              li
  .mobile-gnav ## モバイル用グローバルナビ
    .container
      .menu
        li
        .sub-menu
          li


## 


## フッター
.footer
  .footer__inner

```

## 命名規則
- 英語。(不正確な和製英語でかまわない)
- [BEM](http://getbem.com/)に則って命名する。

- - - - - - - - - - - - - - - - - - -
## セレクタの規則


- - - - - - - - - - - - - - - - - - -
## コメントの規則
```scss
//
// 複数の行やブロックにまたがるまとまりに対する説明
//


// 直下の行やブロックのみに対する説明
```

※複数行のコメント(`/*  */`)は用いない。  
理由は、まとめてコメントアウトする際に邪魔になるからである。