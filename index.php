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
    <h1 class="title">お問い合わせフォーム（仮）</h1>
    <form action="" method="POST">
        <div class="request-detail">
            <h2 class="sub-title sub-title-request">ご依頼内容</h2>
            <div class="form form-1">
                <div class="row form__item form__item-1">
                    <h3 class="sub-sub-title col-12 p-0">依頼タイトル</h3>
                    <input class="form__input form__text-1 col-12 m-0 p-0" type="text" placeholder="例：アウトドア用品店のホームページ制作">
                </div>
            </div>

            <div class="form form-2">
                <div class="row form__item form__item-2">
                    <h3 class="sub-sub-title col-12 p-0">依頼主の業種</h3>
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
                    <h3 class="sub-sub-title form__item form__item-3 col-12 p-0">サイトの種類</h3>
                    <select class="form__select form__select-3 col-12 m-0 p-0" name="kind" id="">
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
                    <h3 class="sub-sub-title form__item form__item-4 col-12 p-0">ご依頼の目的・背景</h3>
                    <textarea class="form__textarea form__textarea-4 col-12 m-0" name="goal" id="" cols="30" rows="4" placeholder="例：新しく女性向けの雑貨屋を立ち上げることになったため、店の魅力が伝わるようなホームページを開設したい。"></textarea>
                </div>
            </div>

            <div class="form form-5">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-5 col-12 p-0">期待する効果</h3>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-1" id="form__checkbox-5-1" type="checkbox"><label class="form__label" for="form__checkbox-5-1">検索エンジンの上位に表示してアクセスを増やしたい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-2" id="form__checkbox-5-2" type="checkbox"><label class="form__label" for="form__checkbox-5-2">商品、サービスの認知度を上げたい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-3" id="form__checkbox-5-3" type="checkbox"><label class="form__label" for="form__checkbox-5-3">ネットショップの売り上げを伸ばしたい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-4" id="form__checkbox-5-4" type="checkbox"><label class="form__label" for="form__checkbox-5-4">問い合わせを増やして新規リードを獲得したい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-5" id="form__checkbox-5-5" type="checkbox"><label class="form__label" for="form__checkbox-5-5">スマートフォンに対応させたい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-6" id="form__checkbox-5-6" type="checkbox"><label class="form__label" for="form__checkbox-5-6">サイトが古いのでリニューアルしたい</label></div>
                    <div class="form__checkbox-5 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-5-7" id="form__checkbox-5-7" type="checkbox"><label class="form__label" for="form__checkbox-5-7">多言語対応で海外展開をしたい</label></div>
                    <textarea class="form__textarea form__textarea-5 col-12 m-0" name="effect" id="" cols="30" rows="10" placeholder="その他の期待する効果がある場合は入力してください"></textarea>
                </div>
            </div>

            <div class="form form-6">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-6 col-12 p-0">ターゲット像</h3>
                    <div class="col-12 m-0 p-0">
                        <div class="form__item-6-title form__item-6-title-1">年代</div>
                        <div class="col-12 m-0 p-0">
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-1" id="form__checkbox-6-1" type="checkbox"><label for="form__checkbox-6-1">10代</label></span>
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-2" id="form__checkbox-6-2" type="checkbox"><label for="form__checkbox-6-2">20代</label></span>
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-3" id="form__checkbox-6-3" type="checkbox"><label for="form__checkbox-6-3">30代</label></span>
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-4" id="form__checkbox-6-4" type="checkbox"><label for="form__checkbox-6-4">40代</label></span>
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-5" id="form__checkbox-6-5" type="checkbox"><label for="form__checkbox-6-5">50代</label></span>
                        </div>
                    </div>
                    <div class="col-12 m-0 p-0">
                        <span class="form__item-6-title form__item-6-title-2">性別</span>
                        <div class="col-9 m-0 p-0">
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-1" id="form__checkbox-6-1" type="checkbox"><label for="form__checkbox-6-1">男性</label></span>
                            <span class="form__checkbox-6"><input class="form__checkbox form__checkbox-6-2" id="form__checkbox-6-2" type="checkbox"><label for="form__checkbox-6-2">女性</label></span>
                        </div>
                    </div>
                    <div class="col-12 m-0 p-0">
                        <span class="form__item-6-title form__item-6-title-3">その他</span>
                        <div><textarea class="form__textarea form__textarea-6 col-12 m-0" name="target" id="target" cols="30" rows="2" placeholder="その他ターゲット像がある場合は入力してください。"></textarea></div>
                    </div>
                </div>
            </div>

            <div class="form form-7">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-7 col-12 p-0">ページ数</h3>
                    <select class="form__select form__select-7 col-12 m-0 p-0" name="page-len" id="">
                        <option value="none">- ページ数を選択 -</option>
                        <option value="1">1 ~ 5ページ</option>
                        <option value="2">6 ~ 10ページ</option>
                        <option value="3">11 ~ 15ページ</option>
                        <option value="4">16 ~ 20ページ</option>
                        <option value="5">21ページ以上</option>
                    </select>
                </div>
            </div>

            <div class="form form-8">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-8 col-12 p-0">スマホ対応の有無</h3>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-1" type="radio" value="1">PCサイトのみ</div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-2" type="radio" value="2">スマートフォン用のサイトのみ</div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-3" type="radio" value="3">レスポンシブWebデザイン（PC、スマホ両方対応）</div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-4" type="radio" value="4">PCサイトとスマートフォン用のサイトを別で用意</div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-5" type="radio" value="5">相談して決める</div>
                </div>
            </div>

            <div class="form form-9">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-9 col-12 p-0">参考URL</h3>
                    <textarea class="form__textarea form__textarea-9 col-12 m-0" name="url" id="url" cols="30" rows="3" placeholder="https://web-contents.site/&#13https://muscle-study.site/&#13※改行区切りで入力してください。"></textarea>
                </div>
            </div>

            <div class="form form-10">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-10 col-12 p-0">ご依頼の範囲</h3>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-1" id="form__checkbox-10-1" type="checkbox"><label class="form__label" for="form__checkbox-10-1">企画・デザイン構成</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-2" id="form__checkbox-10-2" type="checkbox"><label class="form__label" for="form__checkbox-10-2">デザイン</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-3" id="form__checkbox-10-3" type="checkbox"><label class="form__label" for="form__checkbox-10-3">コーディング</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-4" id="form__checkbox-10-4" type="checkbox"><label class="form__label" for="form__checkbox-10-4">CMS・WordPress導入</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-5" id="form__checkbox-10-5" type="checkbox"><label class="form__label" for="form__checkbox-10-5">SEO対策</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-6" id="form__checkbox-10-6" type="checkbox"><label class="form__label" for="form__checkbox-10-6">キャッチコピー・コンテンツライティング</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-7" id="form__checkbox-10-7" type="checkbox"><label class="form__label" for="form__checkbox-10-7">イラスト作成</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-8" id="form__checkbox-10-8" type="checkbox"><label class="form__label" for="form__checkbox-10-8">写真撮影</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-9" id="form__checkbox-10-9" type="checkbox"><label class="form__label" for="form__checkbox-10-9">外国語翻訳</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-10" id="form__checkbox-10-10" type="checkbox"><label class="form__label" for="form__checkbox-10-10">ドメインの取得</label></div>
                    <div class="form__checkbox-10 col-12 m-0 mb-1 p-0"><input class="form__checkbox form__checkbox-10-11" id="form__checkbox-10-11" type="checkbox"><label class="form__label" for="form__checkbox-10-11">サーバーの手配</label></div>
                </div>
            </div>

            <div class="form form-11">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-11 col-12 p-0">用意してある素材</h3>
                    <span class="m-0 mr-3 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-1" type="radio" value="1">用意している</span>
                    <span class="m-0 mb-1 p-0"><input class="form__radio form__radio-8" id="form__radio-8-2" type="radio" value="2">用意していない</span>
                    <div class="form__checkbox-group col-12 p-2">
                        <span class="form__checkbox-11 m-0 mr-2 mb-1 p-0"><input class="form__checkbox form__checkbox-11-1" id="form__checkbox-11-1" type="checkbox" value="1"><label class="form__label" for="form__checkbox-11-1">テキスト</label></span>
                        <span class="form__checkbox-11 m-0 mr-2 mb-1 p-0"><input class="form__checkbox form__checkbox-11-1" id="form__checkbox-11-1" type="checkbox" value="2"><label class="form__label" for="form__checkbox-11-1">写真</label></span>
                        <span class="form__checkbox-11 m-0 mr-2 mb-1 p-0"><input class="form__checkbox form__checkbox-11-1" id="form__checkbox-11-1" type="checkbox" value="3"><label class="form__label" for="form__checkbox-11-1">イラスト</label></span>
                        <span class="form__checkbox-11 m-0 mr-2 mb-1 p-0"><input class="form__checkbox form__checkbox-11-1" id="form__checkbox-11-1" type="checkbox" value="4"><label class="form__label" for="form__checkbox-11-1">動画</label></span>
                    </div>
                </div>
            </div>

            <div class="form form-12">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item- col-12 p-0">納品方法</h3>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-12" id="form__radio-12-1" type="radio" value="1">ZIPファイルによる納品</div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-12" id="form__radio-12-2" type="radio" value="2">オンラインストレージへのアップロード</div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-12" id="form__radio-12-3" type="radio" value="3">指定のサーバーへアップロード</div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-12" id="form__radio-12-4" type="radio" value="4">相談して決める</div>
                </div>
            </div>

            <div class="form form-13">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-13 col-12 p-0">納品後のサポート</h3>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-13" id="form__radio-13-1" type="radio" value="1">希望する</div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-13" id="form__radio-13-2" type="radio" value="2">希望しない</div>
                    <div class="col-12 m-0 mb-1 p-0"><input class="form__radio form__radio-13" id="form__radio-13-3" type="radio" value="3">相談して決める</div>
                </div>
            </div>

            <div class="form form-14">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-14 col-12 p-0">その他</h3>
                    <textarea class="col-12 m-0 p-0" name="etc" id="etc" cols="30" rows="4" placeholder="補足説明・ご質問・ご要望など"></textarea>
                </div>
            </div>
        </div>

        <div class="personal-info">
            <h2 class="sub-title">個人情報</h2>
            <div class="form form-15">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-15 col-12 p-0">その他</h3>
                    <textarea class="col-12 m-0 p-0" name="etc" id="etc" cols="30" rows="4" placeholder="補足説明・ご質問・ご要望など"></textarea>
                </div>
            </div>
            <div class="form form-14">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-14 col-12 p-0">その他</h3>
                    <textarea class="col-12 m-0 p-0" name="etc" id="etc" cols="30" rows="4" placeholder="補足説明・ご質問・ご要望など"></textarea>
                </div>
            </div>
            <div class="form form-14">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-14 col-12 p-0">その他</h3>
                    <textarea class="col-12 m-0 p-0" name="etc" id="etc" cols="30" rows="4" placeholder="補足説明・ご質問・ご要望など"></textarea>
                </div>
            </div>
            <div class="form form-14">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-14 col-12 p-0">その他</h3>
                    <textarea class="col-12 m-0 p-0" name="etc" id="etc" cols="30" rows="4" placeholder="補足説明・ご質問・ご要望など"></textarea>
                </div>
            </div>
            <div class="form form-14">
                <div class="row">
                    <h3 class="sub-sub-title form__item form__item-14 col-12 p-0">その他</h3>
                    <textarea class="col-12 m-0 p-0" name="etc" id="etc" cols="30" rows="4" placeholder="補足説明・ご質問・ご要望など"></textarea>
                </div>
            </div>
        </div>
    </form>


    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>