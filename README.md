## Background
### 1. Describe your preferred coding environment, i.e. OS, IDE, text editor etc.

我曾有使用 Ubuntu 系統開發一年的經驗，現在多數時間仍是使用 Windows 開發。我常使用 PhpStorm/vscode 這兩個IDE進行代碼開發。筆記方面，我個人常使用 Nodepad++, Notion 這兩個本地文字編輯器，若是需要分享，我則會以HackMD做為線上筆記。Git 管理我則會使用 Command line 與 SourceTree GUI 進行管理。

I had a year of experience developed with Ubuntu.Now, I usually develop with Windows. I often used PhpStorm/vscode IDEs for coding.For notes, I often use nodepad++, Notion, two local text editors. If I need to share, I use HackMD as online notes.For git management, I will use the command line and SourceTree GUI for management.

### 2. Describe the workflow for releasing the codes you developed to production
system.

以我自身的 side project 為例，在開發完成後會先跑手動測試/單元測試，完成後會將程式佈上 Heroku git, 觸發自動更新. 資料庫則會運用 ClearDB.

Taking my own side project as an example, after the development completed and the manual test/unit test finished. I push code to Heroku git, trigger automatic update. The database use ClearDB.

## Coding Problem
### 1. Design a table schema to store the above pricing rules in a MySQL table named
`pricing_rules`, please provide the answer in CREATE TABLE statement
format.

```
CREATE TABLE `pricing_rules` (
    id int(2) AUTO_INCREMENT,
    shipment_weight int(3),
    shipping_fee int(5),
    extra_fee int(5),
    PRIMARY KEY (id)
);

INSERT INTO `pricing_rules`(`shipment_weight`, `shipping_fee`, `extra_fee`) VALUES (1,10,10);
INSERT INTO `pricing_rules`(`shipment_weight`, `shipping_fee`, `extra_fee`) VALUES (2,15,3);
INSERT INTO `pricing_rules`(`shipment_weight`, `shipping_fee`, `extra_fee`) VALUES (3,20,6);
```

### 2. Implement the function calculate_shipment_fee
```
/src/ShipmentFee.php
```

### 3. Can you write a unit test for the above function?
 
```
/test/ShipmentFeeTest.php
```

