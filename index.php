<?php
    session_start();
    require("./dbconnect.php");

    // ---------------------
    // 必須
    // ---------------------

    // ご依頼タイトル
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["title"])) {
            // エラーにする
            $error["title"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $title = $_POST["title"];
            $error["title"] = "off";
        }
    } else {
        $error["title"] = "off";
    }

    // 依頼主の業種
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["industry"])) {
            // エラーにする
            $error["industry"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $industry = $_POST["industry"];
            $error["industry"] = "off";
        }
    } else {
        $error["industry"] = "off";
    }

    // サイトの種類
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["site_type"])) {
            // エラーにする
            $error["site_type"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $site_type = $_POST["site_type"];
            $error["site_type"] = "off";
        }
    } else {
        $error["site_type"] = "off";
    }
    
    // ご依頼の目的・背景
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["goal"])) {
            // エラーにする
            $error["goal"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $goal = $_POST["goal"];
            $error["goal"] = "off";
        }
    } else {
        $error["goal"] = "off";
    }

    // 期待する効果
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["effect"])) {
            // エラーにする
            $error["effect"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $effect = $_POST["effect"];
            $effect_etc = $_POST["effect_etc"];
            $error["effect"] = "off";
        }
    } else {
        $error["effect"] = "off";
    }
    
    // ターゲット像（年齢）
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["target_age"])) {
            // エラーにする
            $error["target_age"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $target_age = $_POST["target_age"];
            $target_etc = $_POST["target_etc"];
            $error["target_age"] = "off";
        }
    } else {
        $error["target_age"] = "off";
    }
    
    // ターゲット像（性別）
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["target_sex"])) {
            // エラーにする
            $error["target_sex"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $target_sex = $_POST["target_sex"];
            $target_etc = $_POST["target_etc"];
            $error["target_sex"] = "off";
        }
    } else {
        $error["target_sex"] = "off";
    }
    
    // ページ数
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["page_len"])) {
            // エラーにする
            $error["page_len"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $page_len = $_POST["page_len"];
            $error["page_len"] = "off";
        }
    } else {
        $error["page_len"] = "off";
    }
    
    // スマホ対応の有無
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["responsive"])) {
            // エラーにする
            $error["responsive"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $responsive = $_POST["responsive"];
            $error["responsive"] = "off";
        }
    } else {
        $error["responsive"] = "off";
    }
    
    // 参考URL
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["url_ref"])) {
            // エラーにする
            $error["url_ref"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $url_ref = $_POST["url_ref"];
            $error["url_ref"] = "off";
        }
    } else {
        $error["url_ref"] = "off";
    }
    
    // ご依頼の範囲
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["request_range"])) {
            // エラーにする
            $error["request_range"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $request_range = $_POST["request_range"];
            $error["request_range"] = "off";
        }
    } else {
        $error["request_range"] = "off";
    }
    
    // 用意してある素材
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["material"])) {
            // エラーにする
            $error["material"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $material = $_POST["material"];
            if (isset($_POST["material_kind"])) {
                $material_kind = $_POST["material_kind"];
            } else {
                $material_kind = "";
            }
            $error["material"] = "off";
        }
    } else {
        $error["material"] = "off";
    }
    
    // 納品方法
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["delivery_method"])) {
            // エラーにする
            $error["delivery_method"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $delivery_method = $_POST["delivery_method"];
            $error["delivery_method"] = "off";
        }
    } else {
        $error["delivery_method"] = "off";
    }
    
    // 納品後のサポート
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["support"])) {
            // エラーにする
            $error["support"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $support = $_POST["support"];
            $error["support"] = "off";
        }
    } else {
        $error["support"] = "off";
    }
    
    // 氏名
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力情報を残す
        $name = $_POST["name"];
        // 入力がなかったら
        if (empty($_POST["name"][0]) || empty($_POST["name"][1]) || empty($_POST["name"][2]) || empty($_POST["name"][3])) {
            // エラーにする
            $error["name"] = "on";
        // 入力があったら
        } else {
            $error["name"] = "off";
        }
    } else {
        $error["name"] = "off";
    }
    
    // メールアドレス
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["email"])) {
            // エラーにする
            $error["email"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $email = $_POST["email"];
            $error["email"] = "off";
        }
    } else {
        $error["email"] = "off";
    }
    
    // 電話番号
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["tel"])) {
            // エラーにする
            $error["tel"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $tel = $_POST["tel"];
            $error["tel"] = "off";
        }
    } else {
        $error["tel"] = "off";
    }
    
    // 住所
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力情報を残す
        $address = $_POST["address"];
        // 入力がなかったら
        if (empty($_POST["address"][0]) || empty($_POST["address"][1]) || empty($_POST["address"][2]) || empty($_POST["address"][3])) {
            // エラーにする
            $error["address"] = "on";
        // 入力があったら
        } else {
            $error["address"] = "off";
        }
    } else {
        $error["address"] = "off";
    }
    
    // 個人情報の取扱についての同意
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力がなかったら
        if (empty($_POST["agree"])) {
            // エラーにする
            $error["agree"] = "on";
        // 入力があったら
        } else {
            // 入力情報を残す
            $agree = $_POST["agree"];
            $error["agree"] = "off";
        }
    } else {
        $error["agree"] = "off";
    }

    // ---------------------
    // 任意
    // ---------------------

    // 納期
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力情報を残す
        $delivery_date = $_POST["delivery_date"];
    }

    // その他
    // 送信ボタンが押されたとき
    if (!empty($_POST["send"])) {
        // 入力情報を残す
        $etc = $_POST["etc"];
    }

    // ---------------------
    // データベース書き込み
    // ---------------------
    $error_exist = array_search("on", $error);
    if (!empty($_POST["send"]) && $error_exist === false) {
        // ユーザ情報
        $user = $db->prepare("INSERT INTO user SET first_name_kanji=?, last_name_kanji=?, first_name_hiragana=?, last_name_hiragana=?, email=?, tel=?, address_zip=?, address_prefecture=?, address_city=?, address_last=?");
        $user->execute(array(
            $name[0],
            $name[1],
            $name[2],
            $name[3],
            $email,
            $tel,
            $address[0],
            $address[1],
            $address[2],
            $address[3],
        ));

        $users_id = $db->prepare("SELECT * FROM user ORDER BY id DESC LIMIT 1");
        $users_id->execute();
        $user_id = $users_id->fetch();
        // 依頼内容
        $effect = implode(",", $effect);
        $target_age = implode(",", $target_age);
        $target_sex = implode(",", $target_sex);
        $request_range = implode(",", $request_range);
        if ($material_kind !== "") {$material_kind = implode(",", $material_kind);} else {$material_kind = "";}
        $delivery_date = implode("-", $delivery_date);
        $request = $db->prepare("INSERT INTO request SET user_id=?, title=?, industry=?, site_type=?, goal=?, effect=?, effect_etc=?, target_age=?, target_sex=?, target_etc=?, page_len=?, responsive=?, url_ref=?, request_range=?, material=?, material_kind=?, delivery_method=?, delivery_date=?, support=?, etc=?");
        $request->execute(array(
            (int)$user_id["id"],
            $title,
            (int)$industry,
            (int)$site_type,
            $goal,
            $effect,
            $effect_etc,
            $target_age,
            $target_sex,
            $target_etc,
            (int)$page_len,
            (int)$responsive,
            $url_ref,
            $request_range,
            (int)$material,
            $material_kind,
            (int)$delivery_method,
            $delivery_date,
            (int)$support,
            $etc
        ));
        $to = "g.asai.bml@gmail.com";
        $subject = "お問い合わせ";
        $message = "お問い合わせがありました。/r/nuser_id:$user_id[id]/r/nお名前:$name[0]$name[1], $name[2]$name[3]/r/nemail:$email"; 
        $header = "From: https://web-contents.site";
        mb_send_mail($to, $subject, $message, $header);
        header("Location: ./thanks.php");
        exit();
    }



?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <title>お問い合わせフォーム</title>
</head>
<body>
    <h1 class="title">お問い合わせフォーム</h1>
    <form action="" method="POST">
        <div class="request-detail">
            <h2 class="sub-title sub-title-request">ご依頼内容</h2>

            <div class="form form-1">
                <div class="row form__item form__item-1">
                    <div class="col-12 p-0"><h3 class="sub-sub-title p-0">ご依頼タイトル</h3><span class="mast">必須</span></div>
                    <?php if ($error["title"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <input class="form__text form__text-1 col-12 m-0" type="text" name="title" placeholder="例：アウトドア用品店のホームページ制作" <?php if (isset($title)) {echo "value=" . $title;} ?>>
                </div>
            </div>

            <div class="form form-2">
                <div class="row form__item form__item-2">
                <div class="col-12 p-0"><h3 class="sub-sub-title p-0">依頼主の業種</h3><span class="mast">必須</span></div>
                    <?php if ($error["industry"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <select class="form__select form__select-2 col-12 m-0 p-0" name="industry" id="">
                        <option value="0" <?php if (isset($industry) && $industry === "0") { echo "selected";} ?>>- 依頼主の業種を選択 -</option>
                        <option value="1" <?php if (isset($industry) && $industry === "1") { echo "selected";} ?>>IT・通信・インターネット</option>
                        <option value="2" <?php if (isset($industry) && $industry === "2") { echo "selected";} ?>>マスコミ・メディア</option>
                        <option value="3" <?php if (isset($industry) && $industry === "3") { echo "selected";} ?>>新聞・雑誌・出版</option>
                        <option value="4" <?php if (isset($industry) && $industry === "4") { echo "selected";} ?>>広告・イベント・プロモーション</option>
                        <option value="5" <?php if (isset($industry) && $industry === "5") { echo "selected";} ?>>芸能・エンターテイメント</option>
                        <option value="6" <?php if (isset($industry) && $industry === "6") { echo "selected";} ?>>ゲーム・アニメ・玩具</option>
                        <option value="7" <?php if (isset($industry) && $industry === "7") { echo "selected";} ?>>恋愛・出会い・占い</option>
                        <option value="8" <?php if (isset($industry) && $industry === "8") { echo "selected";} ?>>婚活・ブライダル</option>
                        <option value="9" <?php if (isset($industry) && $industry === "9") { echo "selected";} ?>>動物・ペット</option>
                        <option value="10" <?php if (isset($industry) && $industry === "10") { echo "selected";} ?>>生花・園芸・造園</option>
                        <option value="11" <?php if (isset($industry) && $industry === "11") { echo "selected";} ?>>美術・工芸・音楽</option>
                        <option value="12" <?php if (isset($industry) && $industry === "12") { echo "selected";} ?>>スポーツ・フィットネス</option>
                        <option value="13" <?php if (isset($industry) && $industry === "13") { echo "selected";} ?>>自転車・バイク</option>
                        <option value="14" <?php if (isset($industry) && $industry === "14") { echo "selected";} ?>>旅行・観光・グルメ</option>
                        <option value="15" <?php if (isset($industry) && $industry === "15") { echo "selected";} ?>>ホテル・旅館・民泊</option>
                        <option value="16" <?php if (isset($industry) && $industry === "16") { echo "selected";} ?>>メーカー</option>
                        <option value="17" <?php if (isset($industry) && $industry === "17") { echo "selected";} ?>>商社</option>
                        <option value="18" <?php if (isset($industry) && $industry === "18") { echo "selected";} ?>>流通・運輸・交通</option>
                        <option value="19" <?php if (isset($industry) && $industry === "19") { echo "selected";} ?>>工業・製造</option>
                        <option value="20" <?php if (isset($industry) && $industry === "20") { echo "selected";} ?>>卸売・小売</option>
                        <option value="21" <?php if (isset($industry) && $industry === "21") { echo "selected";} ?>>ファッション・アパレル</option>
                        <option value="22" <?php if (isset($industry) && $industry === "22") { echo "selected";} ?>>家具・インテリア</option>
                        <option value="23" <?php if (isset($industry) && $industry === "23") { echo "selected";} ?>>食品・飲料・たばこ</option>
                        <option value="24" <?php if (isset($industry) && $industry === "24") { echo "selected";} ?>>医療・医薬</option>
                        <option value="25" <?php if (isset($industry) && $industry === "25") { echo "selected";} ?>>介護・福祉</option>
                        <option value="26" <?php if (isset($industry) && $industry === "26") { echo "selected";} ?>>家事代行</option>
                        <option value="27" <?php if (isset($industry) && $industry === "27") { echo "selected";} ?>>葬祭</option>
                        <option value="28" <?php if (isset($industry) && $industry === "28") { echo "selected";} ?>>金融・保険</option>
                        <option value="29" <?php if (isset($industry) && $industry === "29") { echo "selected";} ?>>住宅・不動産</option>
                        <option value="30" <?php if (isset($industry) && $industry === "30") { echo "selected";} ?>>建築・工務店</option>
                        <option value="31" <?php if (isset($industry) && $industry === "31") { echo "selected";} ?>>店舗（飲食店・居酒屋など）</option>
                        <option value="32" <?php if (isset($industry) && $industry === "32") { echo "selected";} ?>>美容室・サロン</option>
                        <option value="33" <?php if (isset($industry) && $industry === "33") { echo "selected";} ?>>資格・習い事</option>
                        <option value="34" <?php if (isset($industry) && $industry === "34") { echo "selected";} ?>>保育園・幼稚園</option>
                        <option value="35" <?php if (isset($industry) && $industry === "35") { echo "selected";} ?>>塾・予備校</option>
                        <option value="36" <?php if (isset($industry) && $industry === "36") { echo "selected";} ?>>大学・学校</option>
                        <option value="37" <?php if (isset($industry) && $industry === "37") { echo "selected";} ?>>学術・研究</option>
                        <option value="38" <?php if (isset($industry) && $industry === "38") { echo "selected";} ?>>リサーチ・調査</option>
                        <option value="39" <?php if (isset($industry) && $industry === "39") { echo "selected";} ?>>コンサルティング・シンクタンク</option>
                        <option value="40" <?php if (isset($industry) && $industry === "40") { echo "selected";} ?>>士業（個人事務所）</option>
                        <option value="41" <?php if (isset($industry) && $industry === "41") { echo "selected";} ?>>人材紹介・人材派遣</option>
                        <option value="42" <?php if (isset($industry) && $industry === "42") { echo "selected";} ?>>翻訳・通訳</option>
                        <option value="43" <?php if (isset($industry) && $industry === "43") { echo "selected";} ?>>エネルギー（電気・ガス・水道など）</option>
                        <option value="44" <?php if (isset($industry) && $industry === "44") { echo "selected";} ?>>農林・水産・鉱業</option>
                        <option value="45" <?php if (isset($industry) && $industry === "45") { echo "selected";} ?>>清掃・設備・警備</option>
                        <option value="46" <?php if (isset($industry) && $industry === "46") { echo "selected";} ?>>公益・非営利団体</option>
                        <option value="47" <?php if (isset($industry) && $industry === "47") { echo "selected";} ?>>官公庁・自治体</option>
                        <option value="48" <?php if (isset($industry) && $industry === "48") { echo "selected";} ?>>政治</option>
                        <option value="49" <?php if (isset($industry) && $industry === "49") { echo "selected";} ?>>宗教</option>
                        <option value="50" <?php if (isset($industry) && $industry === "50") { echo "selected";} ?>>その他</option>
                    </select>

                </div>
            </div>

            <div class="form form-3">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-3 p-0">サイトの種類</h3><span class="mast">必須</span></div>
                <?php if ($error["site_type"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <select class="form__select form__select-3 col-12 m-0 p-0" name="site_type" id="">
                        <option value="0" <?php if (isset($site_type) && $site_type === "0") { echo "selected";} ?>>- サイトの種類を選択 -</option>
                        <option value="1" <?php if (isset($site_type) && $site_type === "1") { echo "selected";} ?>>企業サイト</option>
                        <option value="2" <?php if (isset($site_type) && $site_type === "2") { echo "selected";} ?>>店舗サイト</option>
                        <option value="3" <?php if (isset($site_type) && $site_type === "3") { echo "selected";} ?>>通販サイト・ネットショップ</option>
                        <option value="4" <?php if (isset($site_type) && $site_type === "4") { echo "selected";} ?>>ランディングページ</option>
                        <option value="5" <?php if (isset($site_type) && $site_type === "5") { echo "selected";} ?>>プロモーションサイト</option>
                        <option value="6" <?php if (isset($site_type) && $site_type === "6") { echo "selected";} ?>>採用・求人サイト</option>
                        <option value="7" <?php if (isset($site_type) && $site_type === "7") { echo "selected";} ?>>メディアサイト</option>
                        <option value="8" <?php if (isset($site_type) && $site_type === "8") { echo "selected";} ?>>会員サイト</option>
                        <option value="9" <?php if (isset($site_type) && $site_type === "9") { echo "selected";} ?>>掲示板サイト</option>
                        <option value="10" <?php if (isset($site_type) && $site_type === "10") { echo "selected";} ?>>口コミサイト</option>
                        <option value="11" <?php if (isset($site_type) && $site_type === "11") { echo "selected";} ?>>ブログ</option>
                        <option value="12" <?php if (isset($site_type) && $site_type === "12") { echo "selected";} ?>>アフィリエイトサイト</option>
                        <option value="13" <?php if (isset($site_type) && $site_type === "13") { echo "selected";} ?>>多言語サイト</option>
                        <option value="14" <?php if (isset($site_type) && $site_type === "14") { echo "selected";} ?>>その他</option>
                    </select>
                </div>
            </div>

            <div class="form form-4">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-4 p-0">ご依頼の目的・背景</h3><span class="mast">必須</span></div>
                <?php if ($error["goal"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <textarea class="form__textarea form__textarea-4 col-12 m-0" name="goal" id="" cols="30" rows="4" placeholder="例：新しく女性向けの雑貨屋を立ち上げることになったため、店の魅力が伝わるようなホームページを開設したい。"><?php if (isset($goal)) {echo $goal;} ?></textarea>
                </div>
            </div>

            <div class="form form-5">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-5 p-0">期待する効果</h3><span class="mast">必須</span></div>
                <?php if ($error["effect"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-1" id="form__checkbox-5-1" type="checkbox" name="effect[0]" value="1" <?php if (isset($effect[0]) && $effect[0] === "1") { echo "checked";} ?>><label class="form__label" for="form__checkbox-5-1">検索エンジンの上位に表示してアクセスを増やしたい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-2" id="form__checkbox-5-2" type="checkbox" name="effect[1]" value="2" <?php if (isset($effect[1]) && $effect[1] === "2") { echo "checked";} ?>><label class="form__label" for="form__checkbox-5-2">商品、サービスの認知度を上げたい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-3" id="form__checkbox-5-3" type="checkbox" name="effect[2]" value="3" <?php if (isset($effect[2]) && $effect[2] === "3") { echo "checked";} ?>><label class="form__label" for="form__checkbox-5-3">ネットショップの売り上げを伸ばしたい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-4" id="form__checkbox-5-4" type="checkbox" name="effect[3]" value="4" <?php if (isset($effect[3]) && $effect[3] === "4") { echo "checked";} ?>><label class="form__label" for="form__checkbox-5-4">問い合わせを増やして新規リードを獲得したい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-5" id="form__checkbox-5-5" type="checkbox" name="effect[4]" value="5" <?php if (isset($effect[4]) && $effect[4] === "5") { echo "checked";} ?>><label class="form__label" for="form__checkbox-5-5">スマートフォンに対応させたい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-6" id="form__checkbox-5-6" type="checkbox" name="effect[5]" value="6" <?php if (isset($effect[5]) && $effect[5] === "6") { echo "checked";} ?>><label class="form__label" for="form__checkbox-5-6">サイトが古いのでリニューアルしたい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-7" id="form__checkbox-5-7" type="checkbox" name="effect[6]" value="7" <?php if (isset($effect[6]) && $effect[6] === "7") { echo "checked";} ?>><label class="form__label" for="form__checkbox-5-7">多言語対応で海外展開をしたい</label></div>
                    <textarea class="form__textarea form__textarea-5 col-12 m-0" name="effect_etc" id="" cols="30" rows="10" placeholder="その他の期待する効果がある場合は入力してください"><?php if (isset($effect_etc)) {echo $effect_etc;} ?></textarea>
                </div>
            </div>

            <div class="form form-6">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-6 p-0">ターゲット像</h3><span class="mast">必須</span></div>
                    <div class="col-12 m-0 p-0">
                        <div class="form__item-6-title form__item-6-title-1">年代</div>
                        <?php if ($error["target_age"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                        <div class="col-12 m-0 p-0">
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-1" id="form__checkbox-6-1" type="checkbox" name="target_age[0]" value="1" <?php if (isset($target_age[0]) && $target_age[0] === "1") { echo "checked";} ?>><label class="form__label" for="form__checkbox-6-1">10代</label></span>
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-2" id="form__checkbox-6-2" type="checkbox" name="target_age[1]" value="2" <?php if (isset($target_age[1]) && $target_age[1] === "2") { echo "checked";} ?>><label class="form__label" for="form__checkbox-6-2">20代</label></span>
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-3" id="form__checkbox-6-3" type="checkbox" name="target_age[2]" value="3" <?php if (isset($target_age[2]) && $target_age[2] === "3") { echo "checked";} ?>><label class="form__label" for="form__checkbox-6-3">30代</label></span>
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-4" id="form__checkbox-6-4" type="checkbox" name="target_age[3]" value="4" <?php if (isset($target_age[3]) && $target_age[3] === "4") { echo "checked";} ?>><label class="form__label" for="form__checkbox-6-4">40代</label></span>
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-5" id="form__checkbox-6-5" type="checkbox" name="target_age[4]" value="5" <?php if (isset($target_age[4]) && $target_age[4] === "5") { echo "checked";} ?>><label class="form__label" for="form__checkbox-6-5">50代</label></span>
                        </div>
                    </div>
                    <div class="col-12 m-0 p-0">
                        <span class="form__item-6-title form__item-6-title-2">性別</span>
                        <?php if ($error["target_sex"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                        <div class="col-9 m-0 p-0">
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-6" id="form__checkbox-6-6" type="checkbox" name="target_sex[0]" value="1" <?php if (isset($target_sex[0]) && $target_sex[0] === "1") { echo "checked";} ?>><label class="form__label" for="form__checkbox-6-6">男性</label></span>
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-7" id="form__checkbox-6-7" type="checkbox" name="target_sex[1]" value="2" <?php if (isset($target_sex[1]) && $target_sex[1] === "2") { echo "checked";} ?>><label class="form__label" for="form__checkbox-6-7">女性</label></span>
                        </div>
                    </div>
                    <div class="col-12 m-0 p-0">
                        <span class="form__item-6-title form__item-6-title-3">その他</span>
                        <div><textarea class="form__textarea form__textarea-6 col-12 m-0" name="target_etc" id="target_etc" cols="30" rows="2" placeholder="その他ターゲット像がある場合は入力してください。"><?php if (isset($target_etc)) {echo $target_etc;} ?></textarea></div>
                    </div>
                </div>
            </div>

            <div class="form form-7">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-7 p-0">ページ数</h3><span class="mast">必須</span></div>
                <?php if ($error["page_len"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <select class="form__select form__select-7 col-12 m-0 p-0" name="page_len" id="">
                        <option value="0" <?php if (isset($page_len) && $page_len === "0") { echo "selected";} ?>>- ページ数を選択 -</option>
                        <option value="1" <?php if (isset($page_len) && $page_len === "1") { echo "selected";} ?>>1 ~ 5ページ</option>
                        <option value="2" <?php if (isset($page_len) && $page_len === "2") { echo "selected";} ?>>6 ~ 10ページ</option>
                        <option value="3" <?php if (isset($page_len) && $page_len === "3") { echo "selected";} ?>>11 ~ 15ページ</option>
                        <option value="4" <?php if (isset($page_len) && $page_len === "4") { echo "selected";} ?>>16 ~ 20ページ</option>
                        <option value="5" <?php if (isset($page_len) && $page_len === "5") { echo "selected";} ?>>21ページ以上</option>
                    </select>
                </div>
            </div>

            <div class="form form-8">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-8 p-0">スマホ対応の有無</h3><span class="mast">必須</span></div>
                <?php if ($error["responsive"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-1" type="radio" name="responsive" value="1" <?php if (isset($responsive) && $responsive === "1") { echo "checked";} ?>><label class="form__label" for="form__radio-8-1">PCサイトのみ</label></div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-2" type="radio" name="responsive" value="2" <?php if (isset($responsive) && $responsive === "2") { echo "checked";} ?>><label class="form__label" for="form__radio-8-2">スマートフォン用のサイトのみ</label></div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-3" type="radio" name="responsive" value="3" <?php if (isset($responsive) && $responsive === "3") { echo "checked";} ?>><label class="form__label" for="form__radio-8-3">レスポンシブWebデザイン（PC、スマホ両方対応）</label></div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-4" type="radio" name="responsive" value="4" <?php if (isset($responsive) && $responsive === "4") { echo "checked";} ?>><label class="form__label" for="form__radio-8-4">PCサイトとスマートフォン用のサイトを別で用意</label></div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-5" type="radio" name="responsive" value="5" <?php if (isset($responsive) && $responsive === "5") { echo "checked";} ?>><label class="form__label" for="form__radio-8-5">相談して決める</label></div>
                </div>
            </div>

            <div class="form form-9">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-9 p-0">参考URL</h3><span class="mast">必須</span></div>
                <?php if ($error["url_ref"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <textarea class="form__textarea form__textarea-9 col-12 m-0" name="url_ref" id="url" cols="30" rows="3" placeholder="https://web-contents.site/&#13https://muscle-study.site/&#13※改行区切りで入力してください。"><?php if (isset($url_ref)) {echo $url_ref;} ?></textarea>
                </div>
            </div>

            <div class="form form-10">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-10 p-0">ご依頼の範囲</h3><span class="mast">必須</span></div>
                <?php if ($error["request_range"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-1" id="form__checkbox-10-1" type="checkbox" name="request_range[0]" value="1" <?php if (isset($request_range[0]) && $request_range[0] === "1") { echo "checked";} ?>><label class="form__label" for="form__checkbox-10-1">企画・デザイン構成</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-2" id="form__checkbox-10-2" type="checkbox" name="request_range[1]" value="2" <?php if (isset($request_range[1]) && $request_range[1] === "2") { echo "checked";} ?>><label class="form__label" for="form__checkbox-10-2">デザイン</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-3" id="form__checkbox-10-3" type="checkbox" name="request_range[2]" value="3" <?php if (isset($request_range[2]) && $request_range[2] === "3") { echo "checked";} ?>><label class="form__label" for="form__checkbox-10-3">コーディング</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-4" id="form__checkbox-10-4" type="checkbox" name="request_range[3]" value="4" <?php if (isset($request_range[3]) && $request_range[3] === "4") { echo "checked";} ?>><label class="form__label" for="form__checkbox-10-4">CMS・WordPress導入</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-5" id="form__checkbox-10-5" type="checkbox" name="request_range[4]" value="5" <?php if (isset($request_range[4]) && $request_range[4] === "5") { echo "checked";} ?>><label class="form__label" for="form__checkbox-10-5">SEO対策</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-6" id="form__checkbox-10-6" type="checkbox" name="request_range[5]" value="6" <?php if (isset($request_range[5]) && $request_range[5] === "6") { echo "checked";} ?>><label class="form__label" for="form__checkbox-10-6">キャッチコピー・コンテンツライティング</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-7" id="form__checkbox-10-7" type="checkbox" name="request_range[6]" value="7" <?php if (isset($request_range[6]) && $request_range[6] === "7") { echo "checked";} ?>><label class="form__label" for="form__checkbox-10-7">イラスト作成</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-8" id="form__checkbox-10-8" type="checkbox" name="request_range[7]" value="8" <?php if (isset($request_range[7]) && $request_range[7] === "8") { echo "checked";} ?>><label class="form__label" for="form__checkbox-10-8">写真撮影</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-9" id="form__checkbox-10-9" type="checkbox" name="request_range[8]" value="9" <?php if (isset($request_range[8]) && $request_range[8] === "9") { echo "checked";} ?>><label class="form__label" for="form__checkbox-10-9">外国語翻訳</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-10" id="form__checkbox-10-10" type="checkbox" name="request_range[9]" value="10" <?php if (isset($request_range[9]) && $request_range[9] === "10") { echo "checked";} ?>><label class="form__label" for="form__checkbox-10-10">ドメインの取得</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-11" id="form__checkbox-10-11" type="checkbox" name="request_range[10]" value="11" <?php if (isset($request_range[10]) && $request_range[10] === "11") { echo "checked";} ?>><label class="form__label" for="form__checkbox-10-11">サーバーの手配</label></div>
                </div>
            </div>

            <div class="form form-11">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-11 p-0">用意してある素材</h3><span class="mast">必須</span></div>
                <?php if ($error["material"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <span class="m-0 mr-3 mb-1 p-0"><input class="form__radio form__radio-11" id="form__radio-11-1" type="radio" name="material" value="1" <?php if (isset($material) && $material === "1") { echo "checked";} ?>><label class="form__label" for="form__radio-11-1">用意している</label></span>
                    <span class="m-0 mb-1 p-0"><input class="form__radio form__radio-11" id="form__radio-11-2" type="radio" name="material" value="2" <?php if (isset($material) && $material === "2") { echo "checked";} ?>><label class="form__label" for="form__radio-11-2">用意していない<label></span>
                    <div class="form__checkbox-group col-12 p-2">
                        <span class="form__checkbox-11 m-0 mr-2 mb-1 p-0"><input class="form__checkbox form__checkbox-11-1" id="form__checkbox-11-1" type="checkbox" name="material_kind[0]" value="1" <?php if (isset($material_kind[0]) && $material_kind[0] === "1") { echo "checked";} ?>><label class="form__label" for="form__checkbox-11-1">テキスト</label></span>
                        <span class="form__checkbox-11 m-0 mr-2 mb-1 p-0"><input class="form__checkbox form__checkbox-11-2" id="form__checkbox-11-2" type="checkbox" name="material_kind[1]" value="2" <?php if (isset($material_kind[1]) && $material_kind[1] === "2") { echo "checked";} ?>><label class="form__label" for="form__checkbox-11-2">写真</label></span>
                        <span class="form__checkbox-11 m-0 mr-2 mb-1 p-0"><input class="form__checkbox form__checkbox-11-3" id="form__checkbox-11-3" type="checkbox" name="material_kind[2]" value="3" <?php if (isset($material_kind[2]) && $material_kind[2] === "3") { echo "checked";} ?>><label class="form__label" for="form__checkbox-11-3">イラスト</label></span>
                        <span class="form__checkbox-11 m-0 mr-2 mb-1 p-0"><input class="form__checkbox form__checkbox-11-4" id="form__checkbox-11-4" type="checkbox" name="material_kind[3]" value="4" <?php if (isset($material_kind[3]) && $material_kind[3] === "4") { echo "checked";} ?>><label class="form__label" for="form__checkbox-11-4">動画</label></span>
                    </div>
                </div>
            </div>

            <div class="form form-12">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-12 p-0">納品方法</h3><span class="mast">必須</span></div>
                <?php if ($error["delivery_method"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-12" id="form__radio-12-1" type="radio" name="delivery_method" value="1" <?php if (isset($delivery_method) && $delivery_method === "1") { echo "checked";} ?>><label class="form__label" for="form__radio-12-1">ZIPファイルによる納品</label></div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-12" id="form__radio-12-2" type="radio" name="delivery_method" value="2" <?php if (isset($delivery_method) && $delivery_method === "2") { echo "checked";} ?>><label class="form__label" for="form__radio-12-2">オンラインストレージへのアップロード</label></div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-12" id="form__radio-12-3" type="radio" name="delivery_method" value="3" <?php if (isset($delivery_method) && $delivery_method === "3") { echo "checked";} ?>><label class="form__label" for="form__radio-12-3">指定のサーバーへアップロード</label></div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-12" id="form__radio-12-4" type="radio" name="delivery_method" value="4" <?php if (isset($delivery_method) && $delivery_method === "4") { echo "checked";} ?>><label class="form__label" for="form__radio-12-4">相談して決める</label></div>
                </div>
            </div>

            <div class="form form-13">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-13 p-0">納品後のサポート</h3><span class="mast">必須</span></div>
                <?php if ($error["support"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-13" id="form__radio-13-1" type="radio" name="support" value="1" <?php if (isset($support) && $support === "1") { echo "checked";} ?>><label class="form__label" for="form__radio-13-1">希望する</label></div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-13" id="form__radio-13-2" type="radio" name="support" value="2" <?php if (isset($support) && $support === "2") { echo "checked";} ?>><label class="form__label" for="form__radio-13-2">希望しない</label></div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-13" id="form__radio-13-3" type="radio" name="support" value="3" <?php if (isset($support) && $support === "3") { echo "checked";} ?>><label class="form__label" for="form__radio-13-3">相談して決める</label></div>
                </div>
            </div>

            <div class="form form-14">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-13 p-0">納期</h3><span class="any">任意</span></div>
                    <select class="delivery_year" id="delivery_year" name="delivery_date[0]">
                        <option value="2021" <?php if (isset($delivery_date[0]) && $delivery_date[0] === "2021") { echo "selected";} ?>>2021</option>
                        <option value="2022" <?php if (isset($delivery_date[0]) && $delivery_date[0] === "2022") { echo "selected";} ?>>2022</option>
                    </select>
                    年
                    <select class="delivery_month" id="delivery_month" name="delivery_date[1]">
                        <option value="1" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "1") { echo "selected";} ?>>1</option>
                        <option value="2" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "2") { echo "selected";} ?>>2</option>
                        <option value="3" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "3") { echo "selected";} ?>>3</option>
                        <option value="4" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "4") { echo "selected";} ?>>4</option>
                        <option value="5" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "5") { echo "selected";} ?>>5</option>
                        <option value="6" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "6") { echo "selected";} ?>>6</option>
                        <option value="7" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "7") { echo "selected";} ?>>7</option>
                        <option value="8" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "8") { echo "selected";} ?>>8</option>
                        <option value="9" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "9") { echo "selected";} ?>>9</option>
                        <option value="10" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "10") { echo "selected";} ?>>10</option>
                        <option value="11" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "11") { echo "selected";} ?>>11</option>
                        <option value="12" <?php if (isset($delivery_date[1]) && $delivery_date[1] === "12") { echo "selected";} ?>>12</option>
                    </select>
                    月
                    <select class="delivery_day" id="delivery_day" name="delivery_date[2]">
                        <option value="1" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "1") { echo "selected";} ?>>1</option>
                        <option value="2" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "2") { echo "selected";} ?>>2</option>
                        <option value="3" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "3") { echo "selected";} ?>>3</option>
                        <option value="4" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "4") { echo "selected";} ?>>4</option>
                        <option value="5" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "5") { echo "selected";} ?>>5</option>
                        <option value="6" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "6") { echo "selected";} ?>>6</option>
                        <option value="7" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "7") { echo "selected";} ?>>7</option>
                        <option value="8" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "8") { echo "selected";} ?>>8</option>
                        <option value="9" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "9") { echo "selected";} ?>>9</option>
                        <option value="10" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "10") { echo "selected";} ?>>10</option>
                        <option value="11" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "11") { echo "selected";} ?>>11</option>
                        <option value="12" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "12") { echo "selected";} ?>>12</option>
                        <option value="13" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "13") { echo "selected";} ?>>13</option>
                        <option value="14" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "14") { echo "selected";} ?>>14</option>
                        <option value="15" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "15") { echo "selected";} ?>>15</option>
                        <option value="16" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "16") { echo "selected";} ?>>16</option>
                        <option value="17" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "17") { echo "selected";} ?>>17</option>
                        <option value="18" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "18") { echo "selected";} ?>>18</option>
                        <option value="19" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "19") { echo "selected";} ?>>19</option>
                        <option value="20" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "20") { echo "selected";} ?>>20</option>
                        <option value="21" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "21") { echo "selected";} ?>>21</option>
                        <option value="22" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "22") { echo "selected";} ?>>22</option>
                        <option value="23" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "23") { echo "selected";} ?>>23</option>
                        <option value="24" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "24") { echo "selected";} ?>>24</option>
                        <option value="25" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "25") { echo "selected";} ?>>25</option>
                        <option value="26" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "26") { echo "selected";} ?>>26</option>
                        <option value="27" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "27") { echo "selected";} ?>>27</option>
                        <option value="28" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "28") { echo "selected";} ?>>28</option>
                        <option value="29" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "29") { echo "selected";} ?>>29</option>
                        <option value="30" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "30") { echo "selected";} ?>>30</option>
                        <option value="31" <?php if (isset($delivery_date[2]) && $delivery_date[2] === "31") { echo "selected";} ?>>31</option>
                    </select>
                    日
                </div>
            </div>

            <div class="form form-15">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-14 p-0">その他</h3><span class="any">任意</span></div>
                    <textarea class="form__textarea form__textarea-14 col-12 m-0" name="etc" id="etc" cols="30" rows="4" placeholder="補足説明・ご質問・ご要望など"><?php if (isset($etc)) {echo $etc;} ?></textarea>
                </div>
            </div>
        </div>

        <div class="personal-info">
            <h2 class="sub-title">個人情報</h2>
            <div class="form form-16">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-15 p-0">氏名</h3><span class="mast">必須</span></div>
                    <?php if ($error["name"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <div class="row form__name_kanji col-12 m-0 mb-3 p-0">
                        <span class="form__span-15 form__span-15-1">姓：</span><input class="form__name form__name-15 form__name-15-1" type="name" name="name[0]" placeholder="山田" autocomplete="family-name" <?php if (isset($name[0])) {echo "value=" . $name[0];} ?>>
                        <span class="form__span-15 form__span-15-2">名：</span><input class="form__name form__name-15 form__name-15-2" type="name" name="name[1]" placeholder="太郎" autocomplete="given-name" <?php if (isset($name[1])) {echo "value=" . $name[1];} ?>>
                    </div>
                    <div class="row form__name_hira col-12 m-0 p-0">
                        <span class="form__span-15 form__span-15-3">せい：</span><input class="form__name form__name-15 form__name-15-3" type="name" name="name[2]" placeholder="やまだ" autocomplete="family-name" <?php if (isset($name[2])) {echo "value=" . $name[2];} ?>>
                        <span class="form__span-15 form__span-15-4">めい：</span><input class="form__name form__name-15 form__name-15-4" type="name" name="name[3]" placeholder="たろう" autocomplete="given-name" <?php if (isset($name[3])) {echo "value=" . $name[3];} ?>>
                    </div>
                </div>
            </div>

            <div class="form form-17">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-16 p-0">メールアドレス</h3><span class="mast">必須</span></div>
                    <?php if ($error["email"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <input class="form__email form__email-16 form__email-16-2 col-12 m-0 p-0" type="email" name="email" placeholder="example@example.com" autocomplete="email" <?php if (isset($email)) {echo "value=" . $email;} ?>>
                </div>
            </div>

            <div class="form form-18">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-17 p-0">電話番号（ハイフン無し）</h3><span class="mast">必須</span></div>
                    <?php if ($error["tel"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                    <input class="form__tel form__tel-16 form__tel-16-2 col-12 m-0 p-0" type="tel" name="tel" placeholder="09012345678" autocomplete="tel" <?php if (isset($tel)) {echo "value=" . $tel;} ?>>
                </div>
            </div>

            <div class="form form-19">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-19 p-0">住所</h3><span class="mast">必須</span></div>
                    <?php if ($error["address"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*入力してください</div>";} ?>
                        <div class="row form-19-address col-12 p-0"><span class="form__span-19 form__span-15-1">郵便番号：</span><input class="form__address form__address-19 form__address-19-1" type="text" name="address[0]" placeholder="1234567（ハイフンなし7桁）" autocomplete="postal-code" onKeyUp="AjaxZip3.zip2addr(this,'','address[1]','address[2]');" <?php if (isset($address[0])) {echo "value=" . $address[0];} ?>></div>
                        <div class="row form-19-address col-12 p-0"><span class="form__span-19 form__span-15-2">都道府県：</span><input class="form__address form__address-19 form__address-19-2" type="text" name="address[1]" <?php if (isset($address[1])) {echo "value=" . $address[1];} ?>></div>
                        <div class="row form-19-address col-12 p-0"><span class="form__span-19 form__span-15-3">市区町村：</span><input class="form__address form__address-19 form__address-19-3" type="text" name="address[2]" <?php if (isset($address[2])) {echo "value=" . $address[2];} ?>></div>
                        <div class="row form-19-address col-12 p-0"><span class="form__span-19 form__span-15-4">番地以降：</span><input class="form__address form__address-19 form__address-19-4" type="text" name="address[3]" <?php if (isset($address[3])) {echo "value=" . $address[3];} ?>></div>
                </div>
            </div>

            <div class="form form-20">
                <div class="row">
                <div class="col-12 p-0"><h3 class="sub-sub-title form__item form__item-20 p-0">個人情報の取扱いについて</h3><span class="mast">必須</span></div>
                    <?php if ($error["agree"] === "on") {echo "<div style='color:red' class='col-12 p-0'>*同意してください</div>";} ?>
                    <input class="agree" id="agree" type="checkbox" name="agree"><label class="form__label" for="agree">同意する</label>
                    <div class="personal-infomation col-12 m-0 p-0">
                        個人情報の取扱いについて<br>
                        ご記入いただいた個人情報は、お問い合わせへの対応、および確認に利用します。また、この目的のためにお問い合わせの記録を残すことがあります。<br>
                        取得した個人情報は法令等による場合を除いて、第三者に提供することはありません。<br>
                        取得した個人情報の取扱いを委託することはありません。<br>
                        ご本人からの求めにより、保有する開示対象個人情報の利用目的の通知・開示・内容の訂正・追加または削除・利用の停止・消去および第三者への提供の停止に応じます。<br>
                        本ページでは、クッキーやウェブ・ビーコンを使用するなどして、本人が容易に認識できない方法により個人情報を取得することはありません。<br>
                        <br>
                        上記の「個人情報の取扱いについて」に同意いただいた上で「同意する」のチェックボックスにチェックを入れ「送信」ボタンをクリックしてください。
                    </div>
                </div>
            </div>

            <div class="row">
                <input class="col-6 mx-auto mb-4" id="submit" type="submit" name="send">
            </div>
        </div>

        <footer>
            <p>Webサイト制作者：浅井 元輝</p>
            <p>連絡先：g.asai.bml@gmail.com</p>
        </footer>
    </form>


    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>