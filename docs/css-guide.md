# CSSのルール

## ページ構成

```
## 基礎
.container (全てのブロック内で使われる)


## ヘッダー
header 
  .header-inner
    .header-logo (サイト名。企業ロゴ)

    ## グローバルナビ
    .mobile-gnav
    .gnav
      .gnav-inner
        .gnav-item
          .gnav-item-link
          .gnav-child-list
            .gnav-child-item
              .gnav-child-item-link


## フッター
.footer
  .footer-inner

```

## 命名規則
- 英語。(不正確な和製英語でかまわない)
- ブロック(ひとつにまとまった機能)内の部品のクラス名の先頭には、ブロックの名前をつける。
- ブロックと部品の結合にはハイフンを用いる。スネークやキャメルは不可。
    - OK: `.header-logo-inner`
    - BAD: `.header_logo_inner`, `.headerLogoInner`

### ブロックの命名規則
|規則|説明|
|:--|:--|
|(ブロック)           |ハイフンなし。<br>OK: `.globalnavi`, `.gnav`<br>BAD: `.global-navi`, `.g-nav`|
|(ブロック)-container |複数のブロックを包み込む要素|
|(ブロック)-wrapper   |ひとつのブロックを包み込む要素<br>デザイン上必要な場合のみ定義する|
|(ブロック)-inner     |ブロックの直下の要素。内部の複数の子要素を包み込むためのもの<br>デザイン上必要な場合のみ定義する|
|pc-(ブロック)<br>mobile-(ブロック)|レスポンシブデザインでの各ビュー専用のブロックに対しては、接頭辞をつける|

- - - - - - - - - - - - - - - - - - -
## セレクタの規則