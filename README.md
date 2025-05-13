## Example of Humble Object
テスト容易性を高めるアプローチの1つ Humble Object パターンについて試行錯誤したあれこれです

## 題材
[単体テストの考え方/使い方](https://book.mynavi.jp/ec/products/detail/id=134252) 第7章 単体テストの価値を高めるリファクタリング に出てくる題材を大いに参考にしています

## 要件
- ユーザーが登録しているEメールアドレスを変更する処理があります
- ユーザーテーブルにはID, メールアドレス, 自社の社員かどうかを表す2値 の3種類が格納されています
- Eメールアドレスが自社のドメインである場合は自社の従業員として登録します
- 従業員数を管理するテーブルが別にあり、Eメールアドレス変更時に従業員数についても変更する必要があります

### 参考リンク
- [単体テストの考え方/使い方](https://book.mynavi.jp/ec/products/detail/id=134252)
- [Humble Object - xUnit Test Patterns](http://xunitpatterns.com/Humble%20Object.html)