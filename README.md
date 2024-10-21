# TechnologyDemo
- **author:`Charley、Eric`**


## 目的
促使開發成員藉由各自擅長的技術領域，透過空閒的時間來完成網站專案，供作每位開發成員在求職時作品的呈現。

## 方法
以Eric正在經營的副業美式整骨為出發點，完成以下前後端分離作品
```
1.一頁式動態主頁
2.預約系統
3.周邊商品購物車
```

## 開發工具
Eric: VScode
Charley:

## 版本控制
Eric: GitHub
Charley:

## 程式語言(框架)
Eric: HTML、CSS、JavaS、JavaT(Vue)
Charley:






## 結構參考cypress
```mermaid
graph TD;
A[cypress/ \n # Main directory]
B[fixtures/ \n # Test data folder]
C[example.json \n # Test data file]
D[e2e/ \n # End-to-end test cases]
E[example.cy.js \n # Main test script]
F[pages/ \n # Page objects folder]
G[example.js \n # Page object]
H[support/ \n # Support folder]
I[commands.js \n # Custom commands]
J[cypress.config.js \n # Configuration file]

A --> B
B --> C
A --> D
D --> E
D --> F
F --> G
A --> H
H --> I
A --> J

```

```mermaid
graph TD;
    A((開始))
    B[繼承類別函式]
    C[建構子\n #初始化攔截器/關聯資料]
    D[定義enterwait方法\n # 進入頁面時等待]
    E[定義search方法\n # 查詢]
    F[定義modal方法\n # 功能彈窗/頁面欄位]
    F --> L
    G[定義CUD方法] --> H[add]
    G --> I[edit]
    G --> J[delete]
    H[add] --> L
    I --> K[定義target方法 \n #辨識多筆中的特定資料]
    J --> K
    K --> L[定義setting方法 \n #判斷執行CUD方法]
    N[#建立類別 \nclass 類別名稱 extends 繼承類別名稱]
    O[#導出類別 \nexport類別名稱]
    M((結束))

    A --> N
    N --> B
    N --> C
    N --> D
    N --> E
    N --> F
    B --> O
    C --> O
    D --> O
    E --> O
    L --> O
    O --> M
```
