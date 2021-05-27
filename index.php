<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>お問い合わせフォーム（仮）</title>
</head>
<body>
    <form action="" method="POST">
        <div class="form form-1">
            <div class="row form__item form__item-1">
                <p class="col-12 m-0 p-0">依頼タイトル</p>
                <input class="form__input form__input-1 col-12 m-0 p-0" type="text" placeholder="例：アウトドア用品店のホームページ制作">
            </div>
        </div>
        <div class="form form-2">
            <div class="row form__item form__item-2">
                <p class="col-12 m-0 p-0">依頼主の業種</p>
                <select class="form__select form__select-2 col-12 m-0 p-0" name="industry" id="">
                    <option value="none">- 依頼主の業種を選択 -</option>
                    <option value="1">IT・通信・インターネット</option>
                    <option value="2">マスコミ・メディア</option>
                    <option value="3">新聞・雑誌・出版</option>
                    <option value="4">広告・イベント・プロモーション</option>
                    <option value="5">芸能・エンターテイメント</option>
                    <option value="6">ゲーム・アニメ・玩具</option>
                    <option value="7">恋愛・出会い・占い</option>
                    <option value="8">婚活・ブライダル</option>
                    <option value="9">動物・ペット</option>
                    <option value="10">生花・園芸・造園</option>
                    <option value="11">美術・工芸・音楽</option>
                    <option value="12">スポーツ・フィットネス</option>
                    <option value="13">自転車・バイク</option>
                    <option value="14">旅行・観光・グルメ</option>
                    <option value="15">ホテル・旅館・民泊</option>
                    <option value="16">メーカー</option>
                    <option value="17">商社</option>
                    <option value="18">流通・運輸・交通</option>
                    <option value="19">工業・製造</option>
                    <option value="20">卸売・小売</option>
                    <option value="21">ファッション・アパレル</option>
                    <option value="22">家具・インテリア</option>
                    <option value="23">食品・飲料・たばこ</option>
                    <option value="24">医療・医薬</option>
                    <option value="25">介護・福祉</option>
                    <option value="26">家事代行</option>
                    <option value="27">葬祭</option>
                    <option value="28">金融・保険</option>
                    <option value="29">住宅・不動産</option>
                    <option value="30">建築・工務店</option>
                    <option value="31">店舗（飲食店・居酒屋など）</option>
                    <option value="32">美容室・サロン</option>
                    <option value="33">資格・習い事</option>
                    <option value="34">保育園・幼稚園</option>
                    <option value="35">塾・予備校</option>
                    <option value="36">大学・学校</option>
                    <option value="37">学術・研究</option>
                    <option value="38">リサーチ・調査</option>
                    <option value="39">コンサルティング・シンクタンク</option>
                    <option value="40">士業（個人事務所）</option>
                    <option value="41">人材紹介・人材派遣</option>
                    <option value="42">翻訳・通訳</option>
                    <option value="43">エネルギー（電気・ガス・水道など）</option>
                    <option value="44">農林・水産・鉱業</option>
                    <option value="45">清掃・設備・警備</option>
                    <option value="46">公益・非営利団体</option>
                    <option value="47">官公庁・自治体</option>
                    <option value="48">政治</option>
                    <option value="49">宗教</option>
                    <option value="50">その他</option>
                </select>

            </div>
        </div>
        <div class="form form-3">
            <div class="row">
                <p class="form__item form__item-3 col-12 m-0 p-0">サイトの種類</p>
                <select class="form__select form__select-2 col-12 m-0 p-0" name="industry" id="">
                    <option value="none">- サイトの種類を選択 -</option>
                    <option value="1">企業サイト</option>
                    <option value="2">店舗サイト</option>
                    <option value="3">通販サイト・ネットショップ</option>
                    <option value="4">ランディングページ</option>
                    <option value="5">プロモーションサイト</option>
                    <option value="6">採用・求人サイト</option>
                    <option value="7">メディアサイト</option>
                    <option value="8">会員サイト</option>
                    <option value="9">掲示板サイト</option>
                    <option value="10">口コミサイト</option>
                    <option value="11">ブログ</option>
                    <option value="12">アフィリエイトサイト</option>
                    <option value="13">多言語サイト</option>
                    <option value="14">その他</option>
                </select>
            </div>
        </div>
        <div class="form form-4">
            <div class="row">
                <p class="form__item form__item-4 col-12 m-0 p-0">ご依頼の目的・背景</p>
                <textarea class="form__textarea form__textarea-4 col-12 m-0 p-0" name="goal" id="" cols="30" rows="4" placeholder="例：新しく女性向けの雑貨屋を立ち上げることになったため、店の魅力が伝わるようなホームページを開設したいと考えています。"></textarea>
            </div>
        </div>
        <div class="form form-5">
            <div class="row">
                <p class="form__item form__item-5 col-12 m-0 p-0">期待する効果</p>
                <div><input class="form__checkbox form__checkbox-1" id="form__checkbox-1" type="checkbox"><label class="form__label" for="form__checkbox-1">検索エンジンの上位に表示してアクセスを増やしたい</label></div>
                <div><input class="form__checkbox form__checkbox-2" id="form__checkbox-2" type="checkbox"><label class="form__label" for="form__checkbox-2">商品、サービスの認知度を上げたい</label></div>
                <div><input class="form__checkbox form__checkbox-3" id="form__checkbox-3" type="checkbox"><label class="form__label" for="form__checkbox-3">ネットショップの売り上げを伸ばしたい</label></div>
                <div><input class="form__checkbox form__checkbox-4" id="form__checkbox-4" type="checkbox"><label class="form__label" for="form__checkbox-4">問い合わせを増やして新規リードを獲得したい</label></div>
                <div><input class="form__checkbox form__checkbox-5" id="form__checkbox-5" type="checkbox"><label class="form__label" for="form__checkbox-5">スマートフォンに対応させたい</label></div>
                <div><input class="form__checkbox form__checkbox-6" id="form__checkbox-6" type="checkbox"><label class="form__label" for="form__checkbox-6">サイトが古いのでリニューアルしたい</label></div>
                <div><input class="form__checkbox form__checkbox-7" id="form__checkbox-7" type="checkbox"><label class="form__label" for="form__checkbox-7">多言語対応で海外展開をしたい</label></div>
                <textarea class="form__textarea form__textarea-5 col-12 m-0 p-0" name="effect" id="" cols="30" rows="10" placeholder="その他の期待する効果がある場合は入力してください"></textarea>
            </div>
        </div>
        <div class="form form-6">
            <div class="row">
                <p class="form__item form__item- col-2"></p>
                <input class="form__input form__input- col-5" type="" placeholder="">
            </div>
        </div>
        <div class="form form-7">
            <div class="row">
                <p class="form__item form__item- col-2"></p>
                <input class="form__input form__input- col-5" type="" placeholder="">
            </div>
        </div>
        <div class="form form-8">
            <div class="row">
                <p class="form__item form__item- col-2"></p>
                <input class="form__input form__input- col-5" type="" placeholder="">
            </div>
        </div>
        <div class="form form-9">
            <div class="row">
                <p class="form__item form__item- col-2"></p>
                <input class="form__input form__input- col-5" type="" placeholder="">
            </div>
        </div>
        <div class="form form-10">
            <div class="row">
                <p class="form__item form__item- col-2"></p>
                <input class="form__input form__input- col-5" type="" placeholder="">
            </div>
        </div>
    
    
    
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>