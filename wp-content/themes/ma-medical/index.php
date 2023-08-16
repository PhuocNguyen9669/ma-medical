<?php
/* 
Template Name: Page Home
*/
?>
<?php global $theme_uri; ?>

<?php get_header(); ?>
<!-- #header -->
<div id="main">
    <p class="mainImage">
        <img class="pc" src="<?= $theme_uri; ?>/images/index/main.jpg" alt="mainImage">
        <img class="sp" src="<?= $theme_uri; ?>/images/index/main-sp.png" alt="mainImage">
    </p>
</div>
<!-- #main -->

<div id="content">
    <div id="areaContact">
        <div class="inner">
            <h3 class="contactTitle">お問合せ<small>は</small><span>お電話</span><small>または</small><br class="sp"><span>フォーム</span>でお気軽に</h3>
            <div class="boxPhone">
                <p class="boxPhoneHead">お客様専用電話窓口</p>
                <p class="phone acumin"><a href="tel:0120934844">0120-934-844</a></p>
                <p class="address">電話受付時間　平日9:00-17:00</p>
            </div>
            <p class="btnContact"><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="hover">医師への相談・面談予約申込・<br class="sp">その他お問合せ</a></p>
        </div>
    </div>
    <!-- #areaContact -->
    <div class="areaWorries">
        <div class="inner">
            <h3 class="titleWorries">病気を抱えるお客様とご家族の<br>このような不安や悩みの解決に</h3>
            <ul class="listWorries">
                <li class="listTwo">
                    <p class="textList">癌と診断され、<br>治療の選択肢について<br>いろいろ説明を受けたが、<br>決め切れないでいる。</p>
                </li>
                <li class="listOne">
                    <p class="textList">担当医の説明に<br>納得の行かない<br>部分が<span class="dot">・・・</span></p>
                </li>
                <li class="listFour">
                    <p class="textList">担当医の意見について<br>別の角度からも<br>検討可能だろうか？</p>
                </li>
                <li class="listFive">
                    <p class="textList">担当医から病気の診断に<br>ついての説明を受けたが、<br>別の医師の意見も<br>聞いてみたい。</p>
                </li>
                <li class="listThree">
                    <p class="textList">再発の診断を受けたが、<br>担当医が提示する以外の<br>選択肢はないのだろうか<span class="dot">・・・</span></p>
                </li>
            </ul>
            <p class="imageWorries">
                <img src="<?= $theme_uri; ?>/images/index/people-worries.png" alt="people">
            </p>
        </div>
    </div>
    <!-- areaWorries -->
    <div class="areaService" id="service">
        <div class="area" id="service_online">
            <h3 class="areaTitle acumin">SERVICE</h3>
            <div class="inner">
                <h4 class="service">
                    <span>MAオンライン・<br class="sp">セカンドオピニオンサービス<span class="smDes">とは？</span></span>
                    <span class="serviceContent">医師とオンライン面談</span>
                </h4>
            </div>
        </div>
        <div class="contentService">
            <!-- areaOpinion -->
            <div class="areaOpinion">
                <div class="inner">
                    <p class="imageService">
                        <img src="<?= $theme_uri; ?>/images/index/image-service.png" alt="image-service">
                    </p>
                    <p class="textContent">MAオンライン・セカンドオピニオンサービスは、医師とお客様をオンラインでつなぐセカンドオピニオンサービスです。特に三大疾病（「がん（悪性新生物）」「急性心筋梗塞」「脳卒中」）を含む7大生活習慣病（がん・脳卒中・心筋梗塞・高血圧性疾患・糖尿病・肝硬変・慢性腎不全）持つ方にとっては、納得いく治療法を選択したいという気持ちが強いと思います。そこで選択肢の可能性を広げるのが医師とお客様がオンライン面談で行うオンライン・セカンドオピニオンとなります。事前に必要な資料をご提出いただきます。ご面談後は、面談内容をまとめた面談レポートを作成いたします。</p>
                </div>
            </div>
            <!-- areaDifferent -->
            <div class="areaDifferent">
                <div class="inner">
                    <h3 class="areaTitleLead">病院のセカンドオピニオン<br class="sp">外来との違いは？</h3>
                    <h4 class="desTitle"><span class="dotTitle">■</span>自宅にてオンライン面談</h4>
                    <p class="desText">病院のセカンドオピニオン外来では「医療機関に予約をとり、出向いて、セカンドオピニオン外来担当医師に相談する」という流れになりますが、オンライン・セカンドオピニオンはわざわざ出向くことなく、自宅にてオンライン面談でのご相談が可能です。</p>
                    <ul class="listDifferent">
                        <li>
                            <img src="<?= $theme_uri; ?>/images/index/image-different.png" alt="image-different">
                        </li>
                        <li>
                            <img src="<?= $theme_uri; ?>/images/index/image-different-2.png" alt="image-different">
                        </li>
                    </ul>
                    <h4 class="desTitle"><span class="dotTitle">■</span>医師が選べます</h4>
                    <p class="desText">MAセカンド・オピニオンサービスの大きな特徴は、お客様ご自身が、経験豊富な専門分野でご活躍の医師を医師一覧より選べます。MA提携医師の多くは、市中病院で臨床医をしている現役医師か、医学部教授経験者など、常に最新の医療情報をアップデートしており、医師としての経験値だけでなく、接遇についても全く問題のない厳選された優秀な医師ですのでご安心ください。</p>
                </div>
            </div>
            <!-- areaDoctor -->
            <div class="areaDoctor">
                <div class="inner">
                    <div class="blockDoctor">
                        <h3 class="areaTitleLead">オンライン面談内容</h3>
                        <ul class="listDoctor">
                            <li>
                                <p class="imageDoctor">
                                    <img src="<?= $theme_uri; ?>/images/index/image-interview-1.png" alt="imageDoctor">
                                </p>
                                <p class="textDoctor">オンライン面談当日は、ご提出資料と面談内容を基に、専門医が意見をお伝えいたします。</p>
                            </li>
                            <li>
                                <p class="imageDoctor">
                                    <img src="<?= $theme_uri; ?>/images/index/image-interview-2.png" alt="imageDoctor">
                                </p>
                                <p class="textDoctor">診療行為（検査・治療）は行いません。</p>
                            </li>
                            <li class="last">
                                <p class="imageDoctor">
                                    <img src="<?= $theme_uri; ?>/images/index/image-interview-3.png" alt="imageDoctor">
                                </p>
                                <p class="textDoctor">お時間は原則30分～60分とさせていただいております。</p>
                            </li>
                            <li class="last">
                                <p class="imageDoctor">
                                    <img src="<?= $theme_uri; ?>/images/index/image-interview-4.png" alt="imageDoctor">
                                </p>
                                <p class="textDoctor">面談内容をまとめた面談レポートを作成いたします。</p>
                            </li>
                        </ul>
                        <div class="acceptBlock">
                            <h4 class="titleAccept">次に該当する方・内容についてお受けできない場合があります。</h4>
                            <ul class="listAccept">
                                <li>相談内容が専門外である場合</li>
                                <li>受診中の医療機関からの紹介状・資料等を送付いただけない場合</li>
                                <li>セカンドオピニオン同意書および問診票を事前に送付いただけない場合</li>
                                <li>主治医に対する不満や苦情</li>
                                <li>医療訴訟目的や、裁判係争中に関する相談</li>
                                <li>相談内容が面談医師の専門外である場合</li>
                                <li>死亡した方を対象とする場合</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- areaDiseases -->
            <div class="areaDiseases">
                <div class="inner">
                    <h3 class="areaTitleLead">ご相談いただける疾患例</h3>
                    <ul class="listDiseases">
                        <li>
                            <ul class="detailsList">
                                <li>乳がん</li>
                                <li>胃がん</li>
                                <li>中咽頭がん</li>
                                <li>膀胱がん</li>
                                <li>前立腺がん</li>
                                <li>卵巣がん</li>
                            </ul>
                        </li>
                        <li>
                            <ul class="detailsList">
                                <li>腎盂・尿管がん</li>
                                <li>膵体部がん</li>
                                <li>肺がん</li>
                                <li>子宮頸がん</li>
                                <li>白血病</li>
                                <li>悪性リンパ腫</li>
                            </ul>
                        </li>
                        <li>
                            <ul class="detailsList">
                                <li>大腸がん</li>
                                <li>肝臓がん</li>
                                <li>腎がん</li>
                                <li class="space">直腸カルチノイド</li>
                                <li>他</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- areaBtn -->
            <div class="areaBtn">
                <div class="inner">
                    <p class="btnService"><a href="<?php home_url(); ?>/doctor" class="hover">相談医師一覧</a></p>
                    <p class="btnService last"><a href="<?php home_url(); ?>/contact" class="hover">面談予約をする</a></p>
                </div>
            </div>
        </div>
        <!-- contentService -->
        <!-- contentDoctor -->
        <div class="contentDoctor" id="service_mail">
            <div class="area consultation">
                <div class="inner">
                    <h4 class="service">
                        <span>医師への相談サービス<br class="sp"><span class="smDes">とは？</span></span>
                        <span class="serviceContent">医師とメール相談</span>
                    </h4>
                </div>
            </div>
            <div class="areaOpinion">
                <div class="inner">
                    <p class="imageService">
                        <img src="<?= $theme_uri; ?>/images/index/image-service-2.png" alt="image-service">
                    </p>
                    <p class="textContent">医師に直接メールでご相談ができます。三大疾病（「がん（悪性新生物）」「急性心筋梗塞」「脳卒中」）を含む7大生活習慣病（がん・脳卒中・心筋梗塞・高血圧性疾患・糖尿病・肝硬変・慢性腎不全）や、それ以外の病気、感染症等についても、とても不安なので、別の医師から安心できる説明をもらいたいと思う方には、最適な相談サービスです。お客様の医療情報など資料の提出等は一切必要ございません。医師はご選択いただけますが、どの医師に相談したらいいかわからない場合は、弊社コーディネーターがご提案させていただきます。</p>
                </div>
            </div>
            <!-- areaDoctor -->
            <div class="areaDoctor">
                <div class="inner">
                    <div class="blockDoctor">
                        <h3 class="areaTitleLead">医師へのご相談サービス内容</h3>
                        <ul class="listDoctor">
                            <li>
                                <p class="imageDoctor">
                                    <img src="<?= $theme_uri; ?>/images/index/doctor-image.png" alt="imageDoctor">
                                </p>
                                <p class="textDoctor">初回の医師からの回答後、1カ月の期間内であれば、回答内容についての質問メールを1回お送りすることができます。<br><br>お客様：初回相談➡医師：回答<br>（回答メール送付日から1カ月以内）<br>お客様：回答内容について質問➡医師：回答</p>
                            </li>
                            <li>
                                <p class="imageDoctor">
                                    <img src="<?= $theme_uri; ?>/images/index/doctor-image-2.png" alt="imageDoctor">
                                </p>
                                <p class="textDoctor">相談メールへの医師からの回答は、原則1週間以内となりますが、医師の状況により回答が遅れる場合がありますので、ご了承ください。</p>
                            </li>
                            <li class="last">
                                <p class="imageDoctor">
                                    <img src="<?= $theme_uri; ?>/images/index/doctor-image-3.png" alt="imageDoctor">
                                </p>
                                <p class="textDoctor">尚、適切ではない相談内容は受付られない場合がございますので、ご了承ください。</p>
                            </li>
                            <li class="last">
                                <p class="imageDoctor">
                                    <img src="<?= $theme_uri; ?>/images/index/doctor-image-4.png" alt="imageDoctor">
                                </p>
                                <p class="textDoctor">個人、法人様との年契約も行っております。詳しくはお問い合わせください。</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- areaBtn -->
            <div class="areaBtn">
                <div class="inner">
                    <p class="btnService"><a href="<?php home_url(); ?>/doctor" class="hover">相談医師一覧</a></p>
                    <p class="btnService last"><a href="<?php home_url(); ?>/contact" class="hover">面談予約をする</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- AreaService -->
    <div class="areaProcedure" id="procedure">
        <div class="area" id="procedure_online">
            <h3 class="areaTitle acumin">PROCEDURE</h3>
            <div class="inner">
                <h4 class="service"><span>MAオンライン・<br class="sp">セカンドオピニオンサービスの<br class="sp">流れ</span><span class="serviceContent">医師とオンライン面談</span></h4>
            </div>
        </div>
        <div class="procedureDetails">
            <p class="photoMain"><img src="<?= $theme_uri; ?>/images/index/procedure-photo01.jpg" alt=""></p>
            <div class="inner">
                <div class="procedureFrames">
                    <div class="procedureMain">
                        <h3 class="procedureTitle">お申込み<span class="number acumin">1.</span></h3>
                        <div class="procedureContent">
                            <p class="procedureTest">・面談予約フォームにてお申込みください</p>
                            <p class="procedureTest">・面談希望日の予約は、資料提出などの猶予期間が必要なため、<br class="pc"><span>2週間前まで </span> にお願い致します。</p>
                            <p class="procedureTest">・お申込み後、自動返信メールが送信されます。</p>
                        </div>
                        <p class="procedureRegistration">
                            <a href="<?php home_url(); ?>/contact" class="hover">面談予約フォーム</a>
                        </p>
                    </div>
                    <div class="procedureMain">
                        <h3 class="procedureTitle">面談日を確定<span class="number acumin">2.</span></h3>
                        <div class="procedureContent">
                            <p class="procedureTest">・お申込み内容を確認の上、面談日時を医師と調整し<br class="pc">面談日時の確定のご連絡を致します。</p>
                            <p class="procedureTest">・予約の変更・キャンセルについては、<span>予約日の3営業日前（土日祝日を含まない）<br>17：00までに、メール又はお電話でご連絡ください。
                                    <br> それ以降の予約の変更・キャンセルは応じかねますので、ご了承ください。</span>
                            </p>
                            <p class="example pc">※例　　予約日が10月11日（月）の場合、<br>　　３営業日前とは10月6日（水）の17：00までとなります。</p>
                            <p class="example sp">※例　予約日が10月11日（月）の場合、<br> 　３営業日前とは10月6日（水）の<br>　17：00までとなります。</p>
                        </div>
                        <ul class="procedureLink anchor">
                            <li><a href="#change_online" class="hover">予約の変更・キャンセルについて</a></li>
                        </ul>
                        <div class="procedureBox cancel">
                            <h4 class="boxTitle">予約の変更・キャンセル</h4>
                            <div class="procedurePhone">
                                <h5 class="phoneTitle"><span>お客様専用電話窓口 </span> 電話受付時間 平日9:00-17:00</h5>
                                <p class="numberPhone">
                                    <a href="tel:0120934844">0120-934-844</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="procedureMain">
                        <h3 class="procedureTitle">お支払い<span class="number acumin">3.</span></h3>
                        <div class="procedureContent">
                            <p class="procedureTest">・当サービスは前払制となります。</p>
                            <p class="procedureTest">・予約確定後にメールにて請求情報を送付致しますので内容をご確認いただき、到着後7日以内にクレジットカードまたは銀行振込にてお支払いください。</p>
                            <p class="procedureTest">・尚、期日までにお支払いいただけない場合はキャンセル扱いとさせていただきますので、ご了承ください。</p>
                            <p class="procedureTest">・お支払い方法は、クレジットカードまたは銀行振込からお選びいただけます。</p>
                        </div>
                        <div class="serviceBank">
                            <h4 class="boxTitle">クレジットカード払い</h4>
                            <p class="procedureTest">・請求情報メールに記載の手順にしたがってお持ちのクレジットカードにて決済をお済ませください。</p>
                        </div>
                        <div class="procedureBox card">
                            <h4 class="cardTitle">ご利用いただけるクレジットカード</h4>
                            <ul class="listCard">
                                <li class="cardVisa">
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo01.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo02.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo03.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo04.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo05.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo06.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="serviceBank">
                            <h4 class="boxTitle">銀行振込</h4>
                            <p class="procedureTest">・請求情報メールに記載の口座にお振込ください。</p>
                            <p class="procedureTest">・恐れ入りますが、振込手数料はお客様の負担でお願い致します。</p>
                            <p class="procedureTest">・土日祝の振込みの場合は翌営業日の確認となりますので、ご了承ください。</p>
                        </div>
                    </div>
                    <div class="procedureMain">
                        <h3 class="procedureTitle">必要書類のご用意<span class="number acumin">4.</span></h3>
                        <div class="procedureContent">
                            <p class="procedureTest">・面談日の7～10営業日前までに必要書類をご用意いただき、<br class="pc"> 郵送かメールで添付送付ください。</p>
                            <p class="procedureTest">・必要な書類が７日前までに届いていない場合、オンラインセカンドオピニオンが実施できない場合がありますので、ご了承ください。</p>
                            <p class="procedureTest">・尚、ご提供いただいた資料の返却をご希望の場合は、着払いのみ対応いたします。</p>
                        </div>
                        <div class="procedureBox">
                            <h4 class="boxTitle">ご用意いただく書類や資料</h4>
                            <p class="procedureIntroduce">オンラインセカンドオピニオンをご希望される方は、次の書類や資料をご用意のうえ、7～10営業日前までに下記宛先までご送付ください。</p>
                            <div class="boxPink">
                                <div class="pinkDeails">
                                    <h4 class="pinkTitle">ご自分でご用意できるもの</h4>
                                    <p class="pinkCheckBox">セカンドオピニオン問診票<span><a href="#" class="hover">ダウンロードはこちら</a></span></p>
                                    <p class="pinkCheckBox">セカンドオピニオン問診票<span><a href="#" class="hover">ダウンロードはこちら</a></span></p>
                                    <p class="pinkNone">※ ご本人が面談できない場合</p>
                                    <p class="pinkCheckBox">委任状<span><a href="#" class="hover">ダウンロードはこちら</a></span></p>
                                </div>
                                <div class="pinkDeails">
                                    <h4 class="pinkTitle">主治医に依頼しご用意いただくもの</h4>
                                    <p class="pinkCheckBox addPdl">診療情報提供書（紹介状）</p>
                                    <p class="pinkCheckBox addPdl">意見提供する上で必要なデータ、資料</p>
                                    <div class="specifically">
                                        <p class="specificallyNote">※ 具体的には次のようなものとなりますが、病気の種類　や状態により異なります。</p>
                                        <p class="specificallyText">（例）</p>
                                        <p class="specificallyText">・血液検査記録</p>
                                        <p class="specificallyText">・生理学的検査の結果（心電図、呼吸機能、脳波など）</p>
                                        <p class="specificallyText">・レントゲンフィルム</p>
                                        <p class="specificallyText">・超音波検査の結果と画像</p>
                                        <p class="specificallyText">・MRI検査、CT検査のフィルム</p>
                                        <p class="specificallyText">・病理組織検査の報告書<br> 等</p>
                                    </div>
                                    <p class="locationNote">※画像データは、可能な限り原データのCDコピー等でご提出してください。スマホ写真等での提出では、不鮮明になり、十分な回答をお届けできない原因になり得ます。<br> <br>また、画像データを提出して頂いた場合においても、撮影環境（医療機器が古い、撮影者の技術差等）により、医師の読影が困難になることがありますので、予めご了承ください。</p>
                                    <!-- <p class="locationNote sp">　また、画像データを提出して頂いた場合においても、撮影環境（医療機器が古い、撮影者の技術差等）により、医師の読影が困難になることがありますので、予めご了承ください。<br> <br>また、画像データを提出して頂いた場合においても、撮影環境（医療機器が古い、撮影者の技術差等）により、医師の読影が困難になることがありますので、予めご了承ください。</p> -->
                                </div>
                            </div>
                            <div class="location">
                                <h4 class="boxTitle">書類送付先</h4>
                                <div class="locationDetails">
                                    <p class="locationInfor">〒920-0835</p>
                                    <p class="locationInfor">石川県金沢市東御影町42番１</p>
                                    <p class="locationInfor">卯辰山ガーデンヒルズ・ウエストヒル304号室</p>
                                    <p class="locationInfor">(株）アソシエイツ・ジャパン</p>
                                    <p class="locationInfor">(ＭＡメディカル相談サービス 予約係</p>
                                    <p class="locationInfor"><a href="tel:076-213-5553" class="locationPhone">TEL：076-213-5553</a>　<a href="#" class="hover fax">FAX：076-213-5552</a></p>
                                    <p class="locationInfor"><a href="mailto:info@medical-associates.jp" class="hover">メール：info@medical-associates.jp</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="procedureMain sendMail">
                        <h3 class="procedureTitle">オンライン面談当日<span class="number acumin">5.</span></h3>
                        <p class="mainlTutorial">面談開始5分前までに、お申込み完了メールまたは面談日確定メールに記載のURLからオンライン面談画面を開いてお待ちください。時間になりましたら、開始します。</p>
                        <div class="procedureBox">
                            <h4 class="boxTitle">面談に使用する<br class="sp">ソフトウェアについて</h4>
                            <div class="procedureSoftware">
                                <div class="softwareContent">
                                    <p class="softwareText">当日はオンラインソフト「ZOOM」を使用しての面談となります。<br> 事前にアプリケーションのインストールをお願いいたします。</p>
                                    <div class="softwareLink">
                                        <p class="softwareZoom">
                                            <a href="https://explore.zoom.us/ja/products/meetings/" target="_blank" class="hover"><img src="<?= $theme_uri; ?>/images/index/zomm-btn.jpg" alt=""></a>
                                        </p>
                                        <p class="softwareInstall">
                                            <a href="https://explore.zoom.us/ja/products/meetings/" target="_blank" class="hover">インストールはこちら</a>
                                        </p>
                                    </div>
                                </div>
                                <p class="softwarePhoto"><img src="<?= $theme_uri; ?>/images/index/procedure-photo02.jpg" alt=""></p>
                            </div>
                            <p class="softwareText textSub">スマートフォン/パソコンでのテレビ面談となりますが、お使いの機種や、<br class="pc">OS・ブラウザのバージョンによっては不具合が出ることがありますので、必要であれば正常に面談できるか1時間前にテストさせていただくことがございます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- areaProcedure -->
    <div class="areaFlow" id="procedureの続き">
        <div class="area">
            <div class="inner">
                <h4 class="service"><span>医師への相談サービスの<br class="sp">流れ</span><span class="serviceContent">医師とメール相談</span></h4>
            </div>
        </div>
        <div class="areaProcedure">
            <p class="imageFlow photoMain">
                <img src="<?= $theme_uri; ?>/images/index/image-flow.jpg" alt="image-flow">
            </p>
            <div class="inner">
                <div class="procedureFrames">
                    <div class="procedureMain">
                        <h3 class="procedureTitle">お申込み<span class="number acumin">1.</span></h3>
                        <div class="procedureContent">
                            <p class="procedureTest">・医師へのご相談お申込みフォームにてお申込みください。</p>
                            <p class="procedureTest">・お申込み後、自動返信メールが送信されます。</p>
                        </div>
                        <p class="procedureRegistration">
                            <a href="<?php home_url(); ?>/contact" class="hover">医師へのご相談<br>お申込みフォーム</a>
                        </p>
                    </div>
                    <div class="procedureMain">
                        <h3 class="procedureTitle">相談確定<span class="number acumin">2.</span></h3>
                        <div class="procedureContent">
                            <p class="procedureTest">・ご相談内容を確認し、選択いただいた医師から相談可能か確認の上、弊社よりご連絡致します。</p>
                            <p class="procedureTest">・お客様のご意向を再度確認の上、相談確定となります。</p>
                        </div>
                        <ul class="procedureLink anchor">
                            <li><a href="#cancel_mail" class="hover">予約の変更・キャンセルについて</a></li>
                        </ul>
                    </div>
                    <div class="procedureMain">
                        <h3 class="procedureTitle">お支払い<span class="number acumin">3.</span></h3>
                        <div class="procedureContent">
                            <p class="procedureTest">・当サービスは前払制となります。</p>
                            <p class="procedureTest">・相談確定後にメールにて請求情報を送付致しますので内容をご確認いただき、到着後7日以内にクレジットカードまたは銀行振込にてお支払いください。</p>
                            <p class="procedureTest">・尚、期日までにお支払いいただけない場合はキャンセル扱いとさせていただきますので、ご了承ください。</p>
                            <p class="procedureTest">・お支払い方法は、クレジットカードまたは銀行振込からお選びいただけます。</p>
                        </div>
                        <div class="serviceBank">
                            <h4 class="boxTitle">クレジットカード払い</h4>
                            <p class="procedureTest">・請求情報メールに記載の手順にしたがってお持ちのクレジットカードにて決済をお済ませください。</p>
                        </div>
                        <div class="procedureBox card">
                            <h4 class="cardTitle">ご利用いただけるクレジットカード</h4>
                            <ul class="listCard">
                                <li class="cardVisa">
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo01.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo02.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo03.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo04.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo05.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#" class="hover"><img src="<?= $theme_uri; ?>/images/index/card-photo06.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="serviceBank">
                            <h4 class="boxTitle">銀行振込</h4>
                            <p class="procedureTest">・請求情報メールに記載の口座にお振込ください。</p>
                            <p class="procedureTest">・恐れ入りますが、振込手数料はお客様の負担でお願い致します。</p>
                            <p class="procedureTest">・土日祝の振込みの場合は翌営業日の確認となりますので、ご了承ください。</p>
                        </div>
                    </div>
                    <div class="procedureMain">
                        <h3 class="procedureTitle">医師からの回答<span class="number acumin">4.</span></h3>
                        <div class="procedureContent">
                            <p class="procedureTest">・入金確認後、7～10営業日以内に医師から相談内容に対して回答させていただきます。医師の都合で回答が遅れる場合は、その旨ご案内申し上げます。</p>
                            <p class="procedureImage">
                                <img src="<?= $theme_uri; ?>/images/index/image-procedure.jpg" alt="image-procedure">
                            </p>
                        </div>
                    </div>
                    <div class="procedureMain sendMail">
                        <h3 class="procedureTitle">回答に対する質問<span class="number acumin">5.</span></h3>
                        <div class="procedureContent">
                            <p class="procedureTest">・初回医師からの回答メール到着後、1カ月の期間内で、回答文に対する質問メールを１回お送りすることができます。</p>
                            <p class="procedureTest">・お客様の画像診断やその他の資料に基づくご相談は、MAオンライン・セカンドオピニオンサービスをご利用ください。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- areaProcedure -->
    </div>
    <!-- areaFlow -->
    <div class="areaPrice" id="price">
        <div class="area">
            <h3 class="areaTitle acumin">PRICE</h3>
            <div class="inner" id="price_online">
                <h4 class="service"><span>MAオンライン・<br class="sp">セカンドオピニオンサービス</span><span class="serviceContent">医師とオンライン面談</span></h4>
            </div>
        </div>
        <div class="priceContent">
            <div class="inner">
                <div class="areaFrames">
                    <div class="framesContent">
                        <div class="framesLeft">
                            <h3 class="framesTitle">面談料金</h3>
                            <p class="framesBtn">
                                <a href="#" class="hover"><span>面談レポート込み</span></a>
                            </p>
                        </div>
                        <div class="framesRight">
                            <div class="framesDetail">
                                <p class="framesInformation top">30分以内のご相談</p>
                                <p class="framesPrice acumin">¥25,000<span>（税込 <span class="priceDes">¥27,500</span>）</span>
                                </p>
                            </div>
                            <div class="framesDetail">
                                <p class="framesInformation">以降 +30分毎に</p>
                                <p class="framesPrice acumin">+¥10,000<span>（税込 <span class="priceDes">¥11,000</span>）</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="areaFrames oneRow">
                        <div class="framesContent">
                            <div class="framesLeft">
                                <h3 class="framesTitle framesTitleSpBd">予約料</h3>
                            </div>
                            <div class="framesRight">
                                <div class="framesDetail">
                                    <p class="framesPrice acumin">¥10,000<span>（税込 <span class="priceDes">¥11,000</span>）</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricePrepaid">
                    <p class="prepaidBtn"><a href="#" class="hover">前払い制</a></p>
                    <p class="prepaidText">予約確定後メールにて請求情報を送付致します</p>
                </div>
                <div class="areainterview">
                    <div class="interviewRow">
                        <h4 class="interviewTitle">面談時間</h4>
                        <p class="interviewText">原則30分～最大60分とさせていただいております。<br>当日予定時間を超過した場合は30分ごとに<br class="pc">後日追加請求させていただきます。</p>
                    </div>
                    <div class="interviewRow">
                        <h4 class="interviewTitle foreign">外国籍の方</h4>
                        <p class="interviewText">外国籍のお客様は別途翻訳・通訳料がかかり<br class="pc">ますのでご相談ください。</p>
                    </div>
                </div>
                <div class="areaChange" id="change_online">
                    <h3 class="chageTitle">変更・キャンセル（取消）料について</h3>
                    <div class="tableChange">
                        <!-- <p class="showNotification pc"> ※税抜表示</p> -->
                        <ul class="listNotification">
                            <li>
                                <p class="notificationTitle">変更・取消日<span>（予約日の前日から起算）</span></p>
                                <p class="notificationContent">予約変更・<br>キャンセル（取消）料</p>
                            </li>
                            <li>
                                <p class="notificationTitle">変更・取消日</p>
                                <p class="notificationContent">面談料金100％</p>
                            </li>
                            <li>
                                <p class="notificationTitle">予約日の<br>1～2営業日前</p>
                                <p class="notificationContent">面談料金50%</p>
                            </li>
                            <li>
                                <p class="notificationTitle">予約日の<br>3～4営業日前</p>
                                <p class="notificationContent">面談料金30%</p>
                            </li>
                            <li>
                                <p class="notificationTitle">予約日の<br>5営業日前</p>
                                <p class="notificationContent">面談料金0%</p>
                            </li>
                        </ul>
                    </div>
                    <ul class="listExample pcOnly">
                        <li>例：予約日が2月21日<span>（金）の場合</span></li>
                        <li>2月21日</li>
                        <li>2月20日～19日</li>
                        <li>2月18日～17日</li>
                        <li>2月16日～</li>
                    </ul>
                    <ul class="listExample spOnly">
                        <li>例：予約日が2月21日（金）の場合</li>
                        <li>予約日当日<span>44613</span></li>
                        <li>予約日の1～2営業日前<span>2月20日～19日</span></li>
                        <li>予約日の3～4営業日前<span>2月18日～17日</span></li>
                        <li>予約日の5営業日前<span>2月16日～</span></li>
                    </ul>
                    <div class="chageCost">
                        <p class="costText">予約変更及びキャンセル（取消）料は、キャンセル日により上記のとおり面談料金の３０～１００％となります。</p>
                        <p class="costText">予約日前日から起算して、5営業日前17時までにご連絡いただいた場合は、変更及びキャンセル（取消）料は発生いたしません。</p>
                        <p class="costText">予約料11,000円(税込）は、入金後は一切返金されませんので、予めご了承ください</p>
                        <p class="costText">キャンセル後の再予約については、キャンセル発生日から1カ月以内の再予約のみ、予約料は無料とさせていただきます。<br><span>例）1/1キャンセル発生→1/30までに再予約（オンライン面談日は2月以降も可能）</span></p>
                        <p class="costText">変更・取消しの手続きは、弊社営業時間内にメールかお電話にてご連絡下さい。営業時間過ぎた場合は、翌営業日扱いとなります。</p>
                        <p class="costText">当日面談不参加や無連絡の場合は、変更・キャンセル（取消）料も100％となりますので、ご了承ください。</p>
                        <p class="costText">変更及びキャンセルに伴い返金が発生する場合は、振込手数料は利用者様負担となりますので、差し引いた額を返金いたします。</p>
                        <p class="costText">祝祭日は営業日に数えません。</p>
                    </div>
                </div>
                <div class="areaChange changeBlue onlyTitle">
                    <h3 class="chageTitle">再利用割引</h3>
                    <div class="chageDetails">
                        <p class="chageList">初回利用日から６ヶ月以内での同じサービスの再利用や、サービスを組み合わせての利用（「医師への相談サービス」＋「MAセカンド・オピニオンサービス」等）の場合は、2回目以降の料金は１割引となります。</p>
                        <p class="chageList">※初回利用日とは、オンライン面談サービスでは「面談実施日」、メール相談サービスでは初回の相談メールに対する「回答を送付した日」となります。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- areaPrice -->
    <div class="areaConsultation" id="price_mail">
        <div class="area">
            <div class="inner">
                <h4 class="service"><span>医師への相談サービス</span><span class="serviceContent">医師とメール相談</span></h4>
            </div>
        </div>
        <div class="consultationContent">
            <div class="inner">
                <div class="areaFrames">
                    <div class="framesContent">
                        <div class="framesLeft">
                            <h3 class="framesTitle">相談料金</h3>
                        </div>
                        <div class="framesRight">
                            <div class="framesDetail">
                                <p class="framesPrice acumin">¥20,000<span>（税込 <span class="priceDes acumin">¥22,000</span>）</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class="framesText">2往復まで<br class="sp">（初回医師への相談メール含む）</p>
                </div>
                <div class="pricePrepaid">
                    <p class="prepaidBtn"><a href="#" class="hover">前払い制</a></p>
                    <p class="prepaidText pc">予約確定後メールにて請求情報を送付致します</p>
                </div>
                <div class="areainterview">
                    <div class="interviewRow">
                        <h4 class="interviewTitle foreign">外国籍の方</h4>
                        <p class="interviewText">外国籍のお客様は別途翻訳・通訳料がかかり<br class="pc">ますのでご相談ください。</p>
                    </div>
                </div>
                <div class="areaChange" id="cancel_mail">
                    <h3 class="chageTitle">変更・キャンセル（取消）料について</h3>
                    <div class="chageCost">
                        <p class="costCancel sp"><a href="#">予約のキャンセル</a></p>
                        <p class="costText">原則入金後の変更・キャンセルはできません。変更及びキャンセル（取消）料は100％となりますので、予めご了承ください。</p>
                    </div>
                </div>
                <div class="areaChange changeBlue onlyTitle">
                    <h3 class="chageTitle">再利用割引</h3>
                    <div class="chageDetails">
                        <p class="chageList">初回利用日から６ヶ月以内での同じサービスの再利用や、サービスを組み合わせての利用（「医師への相談サービス」＋「MAセカンド・オピニオンサービス」等）の場合は、2回目以降の料金は１割引となります。</p>
                        <p class="chageList">※初回利用日とは、オンライン面談サービスでは「面談実施日」、メール相談サービスでは初回の相談メールに対する「回答を送付した日」となります。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- areaConsultation -->
    <div class="areaVoice" id="voice">
        <div class="area">
            <h3 class="areaTitle acumin">VOICE</h3>
            <div class="inner">
                <h4 class="titleSub">ご利用者様の声</h4>
            </div>
        </div>
        <div class="voiceDetails">
            <p class="photoMain"><img src="<?= $theme_uri; ?>/images/index/voice-photo01.jpg" alt=""></p>
            <div class="inner">
                <div class="voiceBox">
                    <h3 class="voiceTitle">Tさん　<br class="sp">男性/７０代前半<span>「医師への相談サービス」利用</span></h3>
                    <p class="voiceText">急にお腹が痛くなり、かかりつけのクリニック行ったところ、急性虫垂炎ということで<br class="sp">病院を紹介されました。担当医師は開腹手術となると言われましたが、<br class="pc">このサービスで相談させていただいたところ、単孔式腹腔鏡下虫垂切除手術もあるとのことで、その手術法でお願いしました。お陰様で手術から5日後に退院、痛みもすぐ取れ、手術の傷後もほとんどありません。<br>有難うございました。</p>
                    <p class="case acumin">case<span>1</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- areaVoice -->
</div>
<!-- #content -->
<?php get_template_part('template-parts/content/areaContact'); ?>
<!-- #areaContact -->
<?php get_template_part('template-parts/content/fixedSection'); ?>
<!-- #fixedSection -->
<?php get_footer(); ?>
<!-- #footer -->
</body>

</html>
