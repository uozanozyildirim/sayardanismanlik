@include('widgets.header')

<section class="service-single" id="service-single">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 order-1">
                <div class="sidebar sidebar-service">
                    <div class="widget widget-reservation"><img src="/images/blog/sidebar/reservation.jpg" alt="img"/>
                        <div class="widget-content"><i class="flaticon-040-green-energy"></i>
                            <p>{{ translateToEnglish('Bize iletişim adreslerimden ulaşabilirsiniz') }}</p><a
                                class="btn btn--bordered btn--white"
                                href="/iletisim">{{ translateToEnglish('Lütfen Görüşme İçin Rezervasyon Yapınız') }}</a><a
                                href="tel:05355232114"><span
                                    class="energia-phone-Icon"></span>{{ setting('admin.phone_number') }}</a>
                        </div>
                    </div>
                    <!-- End .widget-reservation-->
                </div>
                <!-- End .sidebar-->
            </div>

            <div class="col-12 col-lg-8 order-0 order-lg-2">
                <!-- Start .service-entry-->
                <div class="service-entry">
                    <div class="entry-content">
                        <h3 class="entry-heading"> {{ translateToEnglish('Kişisel Bilgileri Koruma Kanunu') }}  </h3>
                        <div class="entry-introduction entry-infos">
                            <h5 class="entry-heading">{{ translateToEnglish('698 sayılı Kişisel Verilerin Korunması Kanunu (“Kanun”) 7 Nisan 2016 tarihinde yürürlüğe girmiş olup;
                                işbu Svol Danışmanlık Kişisel Verilerin İşlenmesi ve Korunması Politikası (“Politika”), Kanuna uyumluluğunun sağlanmasını ve Svol Danışmanlık tarafından kişisel verilerin
                                korunması ve işlenmesine ilişkin yükümlülüklerin yerine getirilmesinde uyulacak prensiplerin belirlenmesini amaçlamaktadır.') }} </h5>

                            <div><p>{{ translateToEnglish('1. GİRİŞ
                                1.1. Politikanın Amacı ve Kapsamı
                                6698 sayılı Kişisel Verilerin Korunması Kanunu (“Kanun”) 7 Nisan 2016 tarihinde yürürlüğe girmiş olup; işbu Svol Danışmanlık  Kişisel Verilerin İşlenmesi ve Korunması Politikası (“Politika”), Svol Danışmanlık ’nin (“Svol Danışmanlık veya Şirket”) Kanuna uyumluluğunun sağlanmasını ve Svol Danışmanlık tarafından kişisel verilerin korunması ve işlenmesine ilişkin yükümlülüklerin yerine getirilmesinde uyulacak prensiplerin belirlenmesini amaçlamaktadır.

                                Politika, kişisel verilerin işleme şartlarını belirlemekte ve kişisel verilerin işlenmesinde Svol Danışmanlık tarafından benimsenen ana ilkeleri ortaya koymaktadır. Bu çerçevede Politika, Svol Danışmanlık tarafından Kanun kapsamındaki tüm kişisel veri işleme faaliyetlerini, Svol Danışmanlık’nun işlediği tüm kişisel verilerin sahiplerini ve işlediği tüm kişisel verileri kapsamaktadır.

                                Svol Danışmanlık çalışanlarının kişisel verilerinin işlenmesine ilişkin hususlar, işbu Politika’nın kapsamında olmayıp, Svol Danışmanlık  Çalışan Kişisel Verilerinin İşlenmesi ve Korunması Politikası’nda ayrıca düzenlenmektedir.

                                Politika’da kullanılan terimlere ilişkin tanımlar EK-1’de bulunmaktadır.

                                1.2. Yürürlük ve Değişiklik
                                Politika, Svol Danışmanlık tarafından internet sitesinde yayımlanarak kamuoyuna sunulmuştur. Başta Kanun olmak üzere yürürlükteki mevzuat ile bu Politika’da yer verilen düzenlemelerin çelişmesi halinde mevzuat hükümleri uygulanır.

                                Svol Danışmanlık, yasal düzenlemelere paralel olarak Politika’da değişiklik yapma hakkını saklı tutar. Politika’nın güncel versiyonuna Svol Danışmanlık web sitesinden (www.Svol Danışmanlık.com.tr/kisisel-verilerin-korunmasi) erişilebilir.

                                2. ŞİRKETİMİZİN YÜRÜTTÜĞÜ KİŞİSEL VERİ İŞLEME FAALİYETLERİNE YÖNELİK VERİ SAHİPLERİ, VERİ İŞLEME AMAÇLARI VE VERİ KATEGORİLERİ
                                2.1. Veri Sahipleri
                                Politika kapsamındaki veri sahipleri, Svol Danışmanlık tarafından kişisel verileri işlenmekte olan Svol Danışmanlık çalışanları dışındaki tüm gerçek kişilerdir. Bu çerçevede genel olarak veri sahibi kategorileri aşağıdaki şekildedir:

                                VERİ SAHİBİ KATEGORİLERİ

                                AÇIKLAMA

                                1

                                Müşteri

                                Svol Danışmanlık’nun sunduğu ürün ve hizmetlerden yararlanan gerçek kişileri ifade etmektedir.

                                2

                                Potansiyel Müşteri

                                Svol Danışmanlık’nun sunduğu ürün ve hizmetleri kullanma ilgisini gösteren, müşteriye dönüşme potansiyeli olan gerçek kişileri ifade etmektedir.

                                3

                                Ziyaretçi

                                Svol Danışmanlık şirket, mağaza, yerleşkeleri ve internet sitesini ziyaret eden gerçek kişileri ifade etmektedir.

                                4

                                Çalışan Adayı

                                Svol Danışmanlık’ya CV göndererek veya başka yöntemlerle iş başvurusu yapan gerçek kişileri ifade etmektedir.

                                5

                                Üçüncü Kişiler

                                Yukarıda yer verilen veri sahibi kategorileri ile Svol Danışmanlık çalışanları hariç gerçek kişileri ifade etemektedir.

                                Veri sahibi kategorileri genel bilgi paylaşımı amacıyla belirtilmiştir. Veri sahibinin, bu kategorilerden herhangi birinin kapsamına girmemesi, Kanun’da belirtildiği şekilde veri sahibi niteliğini ortadan kaldırmamaktadır.

                                2.2. Kişisel Veri İşleme Amaçları
                                Svol Danışmanlık tarafından kişisel verileriniz ve özel nitelikli kişisel verileriniz, Kanun’da ve ilgili mevzuatta yer alan kişisel veri işleme şartlarına uygun olarak aşağıdaki amaçlarla işlenebilmektedir:

                                ANA AMAÇLAR

                                ALT AMAÇLAR

                                Svol Danışmanlık’nun İnsan Kaynakları Politikaları ve Süreçlerinin Planlanması ve İcra Edilmesi

                                1- Çalışanlar İçin Yan Haklar ve Menfaatlerin Planlanması ve İcrası,

                                2- İnsan Kaynakları Süreçlerinin Planlanması ve İcrası,

                                3- Personel Temin Süreçlerinin Yürütülmesi,

                                4- Stajyer veya Öğrenci Temin, Yerleştirilmesi ve Operasyon Süreçlerinin Planlanması veya İcrası,

                                5- Çalışanlara Yönelik Kurumsal İletişim Faaliyetlerinin veya Çalışanların Katılım Sağladığı Kurumsal Sosyal Sorumluluk veya Sivil Toplum Kuruluşları Faaliyetlerinin Planlanması veya İcrası.

                                Svol Danışmanlık Tarafından Yürütülen Ticari Faaliyetlerin Gerçekleştirilmesi İçin İlgili İş Birimlerimiz Tarafından Gerekli Çalışmaların Yapılması ve Buna Bağlı İş Süreçlerinin Yürütülmesi

                                1- Finans ve Muhasebe İşlerinin Takibi,

                                2- İş Sürekliliğinin Sağlanması Faaliyetlerinin Planlanması ve İcrası,

                                3- Bilgi Güvenliği Süreçlerinin Planlanması, Denetimi ve İcrası,

                                4- Bilgi Teknolojileri Alt Yapısının Oluşturulması ve Yönetilmesi,

                                5- Kurumsal İletişim Faaliyetlerinin Planlanması ve İcrası,

                                6- Lojistik Faaliyetlerinin Planlanması ve İcrası

                                7- Kurumsal Sosyal Sorumluluk Faaliyetlerinin Planlanması ve İcrası,

                                8- İş Ortakları ve Tedarikçilerin Bilgiye Erişim Yetkilerinin Planlanması ve İcrası,

                                9- Etkinlik Yönetimi,

                                10- İş Faaliyetlerinin Planlanması ve İcrası,

                                11- Tedarik Zinciri Yönetimi Süreçlerinin Planlanması ve İcrası,

                                12- Kurumsal Yönetim Faaliyetlerin Planlanması ve İcrası,

                                13- Şirket Operasyon Süreçlerinin Planlanması ve İcrası,

                                14- İş Faaliyetlerinin Etkinlik/Verimlilik ve Yerindelik Analizlerinin Gerçekleştirilmesi Faaliyetlerinin Planlanması ve İcrası,

                                15- Kurumsal Sürdürülebilirlik Faaliyetlerinin Planlanması ve İcrası.

                                Svol Danışmanlık’nun Ticari ve İş Stratejilerinin Planlanması Ve İcrası

                                1- İş Ortakları ve Tedarikçilerle Olan İlişkilerin Yönetimi,

                                2- Stratejik Planlama Faaliyetlerinin İcrası,

                                3- Şirket Dışı Eğitim Faaliyetlerinin Planlanması ve İcrası.

                                Svol Danışmanlık Tarafından Sunulan Ürün ve Hizmetlerden İlgili Kişileri Faydalandırmak için Gerekli Çalışmaların İş Birimlerimiz Tarafından Yapılması ve İlgili İş Süreçlerinin Yürütülmesi

                                1- Sözleşme Süreçlerinin ve/veya Hukuki Taleplerin Takibi,

                                2- Ürün ve/veya Hizmetlerin Satış Süreçlerinin Planlanması ve İcrası,

                                3- Müşteri İlişkileri Yönetimi Süreçlerinin Planlanması ve İcrası,

                                4- Satış Sonrası Destek Hizmetleri Aktivitelerinin Planlanması ve/veya İcrası,

                                5- Müşteri Talep ve/veya Şikayetlerinin Takibi.

                                Svol Danışmanlık Tarafından Sunulan Ürün ve Hizmetlerin İlgili Kişilerin Beğeni, Kullanım Alışkanlıkları ve İhtiyaçlarına Göre Özelleştirilerek İlgili Kişilere Önerilmesi Ve Tanıtılması İçin Gerekli Olan Aktivitelerin Planlanması ve İcrası

                                1- Müşteri Memnuniyeti Aktivitelerinin Planlanması ve/veya İcrası,

                                2- Ürün ve/veya Hizmetlerin Pazarlama Süreçlerinin Planlanması ve İcrası

                                3- Ürün ve Hizmetlerin Satış ve Pazarlaması İçin Pazar Araştırması Faaliyetlerinin Planlanması ve İcrası,

                                4- Şirketin Sunduğu Ürün veya Hizmetlerden En Yüksek Faydanın Elde Edilmesi İçin İlgili Süreçlerin Planlanması ve İcrası.

                                Svol Danışmanlık’nun ve Svol Danışmanlık ile iş ilişkisi içerisinde olan ilgili kişilerin hukuki, teknik ve ticari-iş güvenliğinin temin edilmesi

                                1- Şirket Denetim Faaliyetlerinin Planlanması ve İcrası,

                                2- Yetkili Kuruluşlara Mevzuattan Kaynaklı Bilgi Verilmesi,

                                3- İş Sağlığı ve/veya Güvenliği Süreçlerinin Planlanması ve/veya İcrası,

                                4- Şirketin Üretim ve/veya Operasyonel Risk Süreçlerinin Planlanması ve/veya İcrası,

                                5- Hukuk İşlerinin Takibi,

                                6- Ziyaretçi Kayıtlarının Oluşturulması ve Takibi,

                                7- Şirket Yerleşkeleri ve/veya Tesislerinin Güvenliğinin Temini,

                                8- Şirket Operasyonlarının Güvenliğinin Temini,

                                9- Şirket Demirbaşlarının ve/veya Kaynaklarının Güvenliğinin Temini,

                                10- Şirketin Finansal Risk Süreçlerinin Planlanması ve/veya İcrası,

                                11- Şirket Faaliyetlerinin Şirket Prosedürleri ve/veya İlgili Mevzuata Uygun Olarak Yürütülmesinin Temini İçin Gerekli Operasyonel Faaliyetlerinin Planlanması ve İcrası,

                                12- Verilerin Doğru ve Güncel Olmasının Sağlanması.

                                2.3. Kişisel Veri Kategorileri
                                Svol Danışmanlık tarafından aşağıda kategorize edilmiş kişisel verileriniz, Kanun’da ve ilgili mevzuatta yer alan kişisel veri işleme şartlarına uygun olarak işlenmektedir:

                                KİŞİSEL VERİ KATEGORİZASYONU

                                AÇIKLAMA

                                Kimlik Bilgisi

                                Ehliyet, nüfus cüzdanı, ikametgâh, pasaport, avukatlık kimliği, evlilik cüzdanı gibi dokümanlarda yer alan kişinin kimliğine dair tüm bilgiler

                                İletişim Bilgisi

                                Telefon numarası, adres, e-mail gibi veri sahibiyle iletişim kurulmasına yönelik bilgiler

                                Müşteri Bilgisi

                                Ticari faaliyetlerimiz ve bu çerçevede iş birimlerimizin yürüttüğü operasyonlar neticesinde ilgili kişi hakkında elde edilen ve üretilen bilgiler

                                Aile Bireyleri ve Yakın Bilgisi

                                Sunduğumuz ürün ve hizmetlerle ilgili veya Şirketin ve veri sahibinin hukuki menfaatlerini korumak amacıyla işlenen kişisel veri sahibinin aile bireyleri ve yakınları hakkındaki bilgiler

                                Müşteri İşlem Bilgisi

                                Ürün ve hizmetlerimizin kullanımına yönelik kayıtlar ile müşterinin ürün ve hizmetleri kullanımı için gerekli olan talimatları ve talepleri gibi bilgiler

                                Fiziksel Mekân Güvenlik Bilgisi

                                Fiziksel mekâna girişte, fiziksel mekânın içerisinde kalış sırasında alınan kamera kayıtları, parmak izi kayıtları gibi kayıtlar ve belgelere ilişkin kişisel veriler

                                İşlem Güvenliği Bilgisi

                                Ticari faaliyetlerimizi yürütürken teknik, idari, hukuki ve ticari güvenliğimizi sağlamamız için işlenen kişisel verileriniz

                                Finansal Bilgi

                                Şirketimizin kişisel veri sahibi ile kurmuş olduğu hukuki ilişkinin tipine göre yaratılan her türlü finansal sonucu gösteren bilgi, belge ve kayıtlara ilişkin işlenen kişisel veriler

                                Çalışan Adayı Bilgisi

                                Şirketimizin çalışanı olmak için başvuruda bulunmuş veya ticari teamül ve dürüstlük kuralları gereği şirketimizin insan kaynakları ihtiyaçları doğrultusunda çalışan adayı olarak değerlendirilmiş veya Şirketimizle çalışma ilişkisi içerisinde olan bireylerle ilgili işlenen kişisel veriler

                                Hukuki İşlem ve Uyum Bilgisi

                                Hukuki alacak ve haklarımızın tespiti, takibi ve borçlarımızın ifası ile kanuni yükümlülüklerimiz ve şirketimizin politikalarına uyum kapsamında işlenen kişisel veriler

                                Denetim ve Teftiş Bilgisi

                                Şirketimizin kanuni yükümlülükleri ve şirket politikalarına uyumu kapsamında işlenen kişisel veriler

                                Özel Nitelikli Veri

                                Kişilerin ırkı, etnik kökeni, siyasi düşüncesi, felsefi inancı, dini, mezhebi veya diğer inançları, kılık ve kıyafeti, dernek, vakıf ya da sendika üyeliği, sağlığı, cinsel hayatı, ceza mahkûmiyeti ve güvenlik tedbirleriyle ilgili verileri ile biyometrik ve genetik verileri özel nitelikli kişisel veridir.

                                Pazarlama Bilgisi

                                Ürün ve hizmetlerimizin kişisel veri sahibinin kullanım alışkanlıkları, beğenisi ve ihtiyaçları doğrultusunda özelleştirilerek pazarlamasının yapılmasına yönelik işlenen kişisel veriler ve bu işleme sonuçları neticesinde yaratılan rapor ve değerlendirmeler

                                Talep/Şikâyet Yönetimi Bilgisi

                                Şirketimize yöneltilmiş olan her türlü talep veya şikâyetin alınması ve değerlendirilmesine ilişkin kişisel veriler

                                İtibar Yönetimi Bilgisi

                                Şirketimizin ticari itibarını korumak maksatlı toplanan bilgiler ve buna ilişkin oluşturulan değerlendirme raporları ile alınan aksiyonlarla ilgili bilgiler

                                Olay Yönetimi Bilgisi

                                Şirketimizin ticari hak ve menfaatleri ile müşterilerimizin hak ve menfaatlerini korumak maksatlı gelişen olaylara karşı gerekli hukuki, teknik ve idari tedbirlerin alınmasına yönelik olarak işlenen kişisel veriler

                                3. KİŞİSEL VERİLERİN İŞLENMESİNE İLİŞKİN İLKELER VE ŞARTLAR
                                3.1. Kişisel Verilerin İşlenmesine İlişkin İlkeler
                                Svol Danışmanlık tarafından kişisel verileriniz, Kanun’un 4. maddesinde yer alan kişisel veri işleme ilkelerine uygun olarak işlenmektedir. Bu ilkelere her bir kişisel veri işleme faaliyeti açısından uyulması zorunludur:

                                Kişisel verilerin hukuka ve dürüstlük kurallarına uygun olarak işlenmesi; Svol Danışmanlık, kişisel verilerinizin işlenmesinde kanunlara, ikincil düzenlemelere ve hukukun genel ilkelerine uygun olarak hareket eder; kişisel verileri işlenme amacı ile sınırlı olarak işlemeye ve veri sahiplerinin makul beklentilerini dikkate almaya önem verir.
                                Kişisel verilerin doğru ve güncel olması; Svol Danışmanlık tarafından işlenen kişisel verilerinizin güncel olup olmadığına, buna ilişkin kontrollerin yapılmasına dikkat edilir. Veri sahiplerine bu kapsamda doğru ve güncel olmayan verilerinin düzeltilmesini veya silinmesini isteme hakkı tanınır.
                                Kişisel verilerin belirli, açık ve meşru amaçlar için işlenmesi; Svol Danışmanlık, her bir kişisel veri işleme faaliyetinden önce veri işleme amaçlarını tespit eder ve bu amaçların hukuka aykırı olmamasına dikkat eder.
                                Kişisel verilerin işlendiği amaçla bağlantılı, sınırlı ve ölçülü olması; Svol Danışmanlık tarafından veri işleme faaliyeti toplama amacını gerçekleştirme için gerekli olan kişisel verilerle sınırlandırılmakta ve bu amaçla ilişkili olmayan kişisel verilerin işlenmemesi için gerekli adımlar atılmaktadır.
                                Kişisel verilerin mevzuatın ya da işleme amaçlarının gerektirdiği süre kadar saklanması; Svol Danışmanlık tarafından kişisel veri işleme amacının ortadan kalkmasından sonra ya da mevzuatta öngörülen sürenin dolması ile birlikte kişisel veriler silinmekte, yok edilmekte veya anonimleştirilmektedir.
                                3.2. Kişisel Verilerin İşlenmesine İlişkin Şartlar
                                Svol Danışmanlık tarafından kişisel verileriniz, Kanun’un 5. maddesinde yer alan kişisel veri işleme şartlarından en az birinin varlığı halinde işlenmektedir. Söz konusu şartlara ilişkin açıklamalar aşağıda yer almaktadır:

                                Kişisel veri sahibinin açık rızasının olması diğer veri işleme şartlarının var olmadığı durumlarda, 3.1. başlık altında yer verilen genel ilkelere uygun olarak, Svol Danışmanlık tarafıdan veri sahibinin kişisel verileri, veri sahibinin özgür iradesi ile kişisel veri işleme faaliyetine ilişkin yeterli bilgi sahibi olarak, tereddüde yer bırakmayacak şekilde ve sadece o işlemle sınırlı olarak onay vermesi halinde işlenebilmektedir.
                                Kişisel veri işleme faaliyetinin kanunlarda açıkça öngörülmesi halinde Svol Danışmanlık tarafından kişisel veriler, veri sahibinin açık rızası olmadan işlenebilecektir. Bu durumda Svol Danışmanlık, ilgili hukuki düzenleme çerçevesinde kişisel verileri işleyecektir.
                                Fiili imkânsızlık nedeniyle veri sahibinin açık rızasının elde edilememesi ve kişisel veri işlemenin zorunlu olması halinde, Svol Danışmanlık tarafından rızasını açıklayamayacak durumda olan veya rızasına geçerlilik tanınamayacak olan veri sahibine ait kişisel veriler, veri sahibinin veya üçüncü bir kişinin hayatı veya beden bütünlüğünü korumak adına kişisel veri işlemenin zorunlu olması durumunda işlenecektir.
                                Kişisel veri işleme faaliyetinin bir sözleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olması durumunda, veri sahibi ile Svol Danışmanlık arasında kurulan veya halihazırda imzalanmış olan sözleşmenin taraflarına ait kişisel verilerin işlenmesi gerekli ise kişisel veri işleme faaliyeti gerçekleştirilecektir.
                                Veri sorumlusu hukuki yükümlülüğünü yerine getirme için kişisel veri işleme faaliyeti yürütülmesinin zorunlu olması durumunda Svol Danışmanlık, yürürlükteki mevzuat kapsamında öngörülen hukuki yükümlülüklerini yerine getirme amacıyla kişisel verileri işlemektedir.
                                Veri sahibinin kişisel verilerini alenileştirmiş olması, veri sahibi tarafından herhangi bir şekilde kamuoyuna açıklanmış, alenileştirilme sonucu herkesin bilgisine açılmış olan kişisel veriler alenileştirme amacı ile sınırlı olarak Svol Danışmanlık tarafından veri sahiplerinin açık rızası olmasa da işlenebilecektir.
                                Bir hakkın tesisi, kullanılması veya korunması için kişisel veri işlemenin zorunlu olması durumunda, Svol Danışmanlık zorunluluk kapsamında veri sahiplerinin açık rızası olmaksızın veri sahibinin kişisel verilerini işleyebilecektir.
                                Veri sahibinin temel hak ve özgürlüklerine zarar vermemek kaydıyla, veri sorumlusunun meşru menfaatleri için veri işlemenin zorunlu olması halinde, Svol Danışmanlık ile veri sahibinin menfaat dengesinin gözetilmesi şartıyla Svol Danışmanlık tarafından kişisel veriler işlenebilecektir. Bu kapsamda, meşru menfaate dayanarak verilerin işlenmesinde Svol Danışmanlık öncelikle işleme faaliyeti sonucunda elde edeceği meşru menfaati belirler. Kişisel verilerin işlenmesinin veri sahibinin hak ve özgürlükleri üzerindeki olası etkisini değerlendirir ve dengenin bozulmadığı kanaatindeyse işleme faaliyetini gerçekleştirir.
                                3.3. Özel Nitelikli Kişisel Verilerin İşlenmesine İlişkin Şartlar
                                Kanunun 6. maddesinde özel nitelikli kişisel veriler, sınırlı sayıda olacak şekilde belirtilmiştir. Bunlar; kişilerin ırkı, etnik kökeni, siyasi düşüncesi, felsefi inancı, dini, mezhebi veya diğer inançları, kılık ve kıyafeti, dernek, vakıf ya da sendika üyeliği, sağlığı, cinsel hayatı, ceza mahkûmiyeti ve güvenlik tedbirleriyle ilgili verileri ile biyometrik ve genetik verileridir.

                                Svol Danışmanlık, özel nitelikli kişisel verileri Kişisel Verileri Koruma Kurulu tarafından belirlenen ilave tedbirlerin alınmasını sağlayarak aşağıdaki durumlarda işleyebilmektedir:

                                Sağlık ve cinsel hayat dışındaki özel nitelikli kişisel verilerin işlenmesi, veri sahibinin açık rıza vermesi halinde veya kanunlarda açıkça öngörülmesi durumunda işlenebilmektedir.
                                Sağlık ve cinsel hayata ilişkin kişisel veriler, ancak kamu sağlığının korunması, koruyucu hekimlik, tıbbî teşhis, tedavi ve bakım hizmetlerinin yürütülmesi, sağlık hizmetleri ile finansmanının planlanması ve yönetimi amacıyla, sır saklama yükümlülüğü altında bulunan kişiler veya yetkili kurum ve kuruluşlar tarafından veri sahibinin açık rızası aranmaksızın işlenebilmektedir.
                                4. KİŞİSEL VERİLERİN AKTARILMASI
                                Svol Danışmanlık, Kanun’un 8. ve 9. maddelerinde sıralanan ve Kişisel Verileri Koruma Kurulu tarafından belirlenmiş olan ilave düzenlemelere uygun olarak; kişisel verilerin aktarılması şartlarının bulunması durumunda kişisel verileri yurtiçinde veya yurtdışına aktarabilmektedir.

                                Kişisel verilerin yurtiçinde üçüncü kişilere aktarımı, Kanun’un 5. ve 6. maddesinde yer alan ve işbu Politika’nın 3. Başlığı altında açıklanmış olan veri işleme şartlarından en az birinin varlığı halinde ve veri işleme şartlarına ilişkin temel ilkelere uymak şartıyla kişisel verileriniz Svol Danışmanlık tarafından aktarılabilmektedir.
                                Kişisel verilerin yurtdışında üçüncü kişilere aktarımı, kişinin açık rızası olmadığı hallerde, Kanun’un 5. ve 6. maddesinde yer alan ve işbu Politika’nın 3. Başlığı altında açıklanmış olan veri işleme şartlarından en az birinin varlığı halinde ve veri işleme şartlarına ilişkin temel ilkelere uymak şartıyla Svol Danışmanlık tarafından kişisel verileriniz yurtdışına aktarılabilmektedir.
                                Aktarımın yapılacağı ülkenin Kişisel Verileri Koruma Kurulu tarafından ilan edilecek güvenli ülkelerden olmaması halinde, Svol Danışmanlık ve ilgili ülkedeki veri sorumlusunun yeterli korumayı yazılı olarak taahhüt etmesi üzerine, Kişisel Verileri Koruma Kurulu’nun bu işleme izin vermesi ile Kanun’un 5. ve 6. maddesinde yer alan veri işleme şartlarından (bakınız Politika 3. Başlık) en az birinin varlığı halinde kişisel veriler yurtdışında üçüncü taraflara aktarılabilmektedir.

                                Kanunun genel ilkeleri ile 8. ve 9. maddelerinde yer alan veri işleme şartları dahilinde Svol Danışmanlık, aşağıdaki tabloda kategorizasyonu yapılmış taraflara veri aktarımı gerçekleştirebilmektedir:

                                PAYLAŞILAN TARAF KATEGORİZASYONU

                                KAPSAM

                                AKTARIM AMACI

                                İş Ortağı

                                Svol Danışmanlık’nun ticari faaliyetlerini yürütürken iş ortaklığı kurduğu taraflar

                                İş ortaklığının kurulma amaçlarının yerine getirilmesini temin etmek amacıyla sınırlı olarak kişisel verilerin paylaşımı

                                Tedarikçi

                                Svol Danışmanlık’dan aldığı talimatlar doğrultusunda ve Svol Danışmanlık ile arasındaki sözleşmeye dayanarak Svol Danışmanlık’nun ticari faaliyetlerini sürdürmesine yönelik hizmet sunan taraflar

                                Tedarikçiden dış kaynaklı olarak temin edilen hizmetlerin alınması ile sınırlı olarak aktarım

                                İştirak

                                Svol Danışmanlık’nun iştiraki olan şirketler

                                İştiraklerin katılımını gerektiren ticari faaliyetlerin yürütülmesi amacıyla sınırlı olarak kişisel verilerin aktarılması

                                Kanunen Yetkili Kamu Kurumu

                                Hukuken Svol Danışmanlık’dan bilgi ve belge almaya yetkili kamu kurum ve kuruluşları

                                İlgili kamu kurum ve kuruluşlarının bilgi talep etme amacıyla sınırlı olarak kişisel veri paylaşımı

                                Kanunen Yetkili Özel Kurum

                                Hukuken Svol Danışmanlık’dan bilgi ve belge almaya yetkili özel hukuk kişileri

                                İlgili özel hukuk kişilerinin hukuki yetkisi dahilinde talep ettiği amaçla sınırlı olarak verilerin paylaşımı

                                5. VERİ SAHİPLERİNİN AYDINLATILMASI VE VERİ SAHİPLERİNİN HAKLARI
                                Kanunun 10. maddesine göre kişisel verilerin işlenmesinden önce veya en geç kişisel verilerin işlenmesi anında, veri sahiplerinin kişisel veri işlenmesine ilişkin aydınlatılmaları gerekmektedir. İlgili madde gereğince gereğince veri sorumlusu sıfatıyla Svol Danışmanlık tarafından kişisel veri işleme faaliyetinin yürütüldüğü her durumda veri sahiplerinin aydınlatılmasını sağlamak üzere şirket içi gerekli yapı oluşturulmuştur.

                                Bu kapsamda;

                                Kişisel verilerinizin işlenme amacı için lütfen Politika’nın 2.2. bölümünü inceleyiniz.
                                Kişisel verilerinizin aktarıldığı taraflar ve aktarım amacı için lütfen Politika’nın 4. Bölümünü inceleyiniz.
                                Fiziki veya elektronik ortamlarda farklı kanallarla toplanabilen kişisel verilerinizi işlenmesine ilişkin şartları incelemek için lütfen Politika’nın 3.2 ve 3.3. bölümüne bakınız.
                                Veri sahibi olarak Kanun’un 11. maddesi uyarınca aşağıdaki haklara sahip olduğunuzu belirtmek isteriz:
                                ― Kişisel verilerinizin işlenip işlenmediğini öğrenme,

                                ― Kişisel verileriniz işlenmişse buna ilişkin bilgi talep etme,

                                ― Kişisel verilerinizin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,

                                ― Yurt içinde veya yurt dışında kişisel verilerinizin aktarıldığı üçüncü kişileri bilme,

                                ― Kişisel verilerinizin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerinizin aktarıldığı üçüncü kişilere bildirilmesini isteme,

                                ― Kanun’a ve ilgili diğer kanun hükümlerine uygun olarak işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması hâlinde kişisel verilerin silinmesini veya yok edilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerinizin aktarıldığı üçüncü kişilere bildirilmesini isteme,

                                ― İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle aleyhinize bir sonucun ortaya çıkması durumunda buna itiraz etme,

                                ― Kişisel verilerinizin kanuna aykırı olarak işlenmesi sebebiyle zarara uğramanız hâlinde zararın giderilmesini talep etme.

                                Yukarıda sıralanan haklarınıza yönelik başvurularınızı, www.Svol Danışmanlık.com.tr/kisisel-verilerin-korunmasi, www.instreet.com.tr/kisisel-verilerin-korunmasi, www.ninewest.com.tr/kisisel-verilerin-korunmasiadreslerinden ulaşabileceğiniz Svol Danışmanlık Mağazacılık ve Pazarlama Anonim Şirketi Veri Sahibi Başvuru Formu’nu doldurarak Şirketimize iletebilirsiniz. Talebinizin niteliğine göre en kısa sürede ve en geç otuz gün içinde başvurularınız ücretsiz olarak sonuçlandırılacaktır; ancak işlemin ayrıca bir maliyet gerektirmesi halinde Kişisel Verileri Koruma Kurulu tarafından belirlenecek tarifeye göre tarafınızdan ücret talep edilebilecektir.

                                Svol Danışmanlık, başvuruların değerlendirilmesi sırasında öncelikle talepte bulunan kişinin gerçek hak sahibi olup olmadığını tespit etmektedir. Bununla birlikte Svol Danışmanlık gerek gördüğü durumlarda talebin daha iyi anlaşılabilmesi için detaylı ve/veya ek bilgi isteyebilmektedir.

                                Svol Danışmanlık tarafından veri sahibi başvurularına yanıtlar, yazılı olarak veya elektronik ortamda veri sahiplerine bildirilmektedir. Başvurunun reddedilmesi halinde ret nedenleri gerekçeli olarak veri sahibine açıklanacaktır.

                                Kişisel verilerin doğrudan veri sahibinden elde edilmemesi halinde; Svol Danışmanlık tarafından (1) kişisel verilerin elde edilmesinden itibaren makul bir süre içerisinde, (2) kişisel verilerin veri sahipleri kişi ile iletişim amacıyla kullanılacak olması durumunda, ilk iletişim kurulması esnasında, (3) kişisel verilerin aktarılacak olması halinde, en geç kişisel verilerin ilk kez aktarımının yapılacağı esnada veri sahiplerinin aydınlatılmasına ilişkin faaliyetler yürütülmektedir.



                                Svol Danışmanlık Mağazacılık ve Pazarlama Anonim Şirketi Veri Sahibi Başvuru Formu



                                6. KİŞİSEL VERİLERİN SİLİNMESİ, YOK EDİLMESİ, ANONİM HALE GETİRİLMESİ
                                Kanun’un 7. maddesi gereğince hukuka uygun olarak işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması hâlinde kişisel veriler tarafından resen veya veri sahibinin talebi üzerine Svol Danışmanlık, Kurum tarafından yayımlanan rehberlere uygun olarak siler, yok eder veya anonim hâle getirir.

                                7. KANUN KAPSAMI VE UYGULANMASINA İLİŞKİN KISITLAMALAR
                                Aşağıda belirtilen durumlar Kanun kapsamı dışındadır:

                                - Kişisel verilerin, üçüncü kişilere verilmemek ve veri güvenliğine ilişkin yükümlülüklere uyulmak kaydıyla gerçek kişiler tarafından tamamen kendisiyle veya aynı konutta yaşayan aile fertleriyle ilgili faaliyetler kapsamında işlenmesi.

                                - Kişisel verilerin resmi istatistik ile anonim hâle getirilmek suretiyle araştırma, planlama ve istatistik gibi amaçlarla işlenmesi.

                                - Kişisel verilerin millî savunmayı, millî güvenliği, kamu güvenliğini, kamu düzenini, ekonomik güvenliği, özel hayatın gizliliğini veya kişilik haklarını ihlal etmemek ya da suç teşkil etmemek kaydıyla, sanat, tarih, edebiyat veya bilimsel amaçlarla ya da ifade özgürlüğü kapsamında işlenmesi.

                                - Kişisel verilerin millî savunmayı, millî güvenliği, kamu güvenliğini, kamu düzenini veya ekonomik güvenliği sağlamaya yönelik olarak kanunla görev ve yetki verilmiş kamu kurum ve kuruluşları tarafından yürütülen önleyici, koruyucu ve istihbari faaliyetler kapsamında işlenmesi.

                                - Kişisel verilerin soruşturma, kovuşturma, yargılama veya infaz işlemlerine ilişkin olarak yargı makamları veya infaz mercileri tarafından işlenmesi.

                                Aşağıda sayılan durumlarda Svol Danışmanlık tarafından veri sahiplerine aydınlatma yapılması gerekmemektedir ve veri sahipleri, zararlarının giderilmesine ilişkin hakları hariç olmak üzere, Kanun’da belirtilen haklarını kullanamayacaklardır:

                                - Kişisel veri işlemenin suç işlenmesinin önlenmesi veya suç soruşturması için gerekli olması.

                                - İlgili kişinin kendisi tarafından alenileştirilmiş kişisel verilerin işlenmesi.

                                - Kişisel veri işlemenin kanunun verdiği yetkiye dayanılarak görevli ve yetkili kamu kurum ve kuruluşları ile kamu kurumu niteliğindeki meslek kuruluşlarınca, denetleme veya düzenleme görevlerinin yürütülmesi ile disiplin soruşturma veya kovuşturması için gerekli olması.

                                - Kişisel veri işlemenin bütçe, vergi ve mali konulara ilişkin olarak Devletin ekonomik ve mali çıkarlarının korunması için gerekli olması.


                                EK-1: TANIMLAR

                                TANIM

                                Açık Rıza

                                Belirli bir konuya ilişkin, bilgilendirilmeye dayanan ve özgür iradeyle açıklanan rıza.

                                Anonim Hale Getirme

                                Kişisel verinin, başka verilerle eşleştirilerek dahi hiçbir surette kimliği belirli veya belirlenebilir bir gerçek kişiyle ilişkilendirilemeyecek hale getirilmesi.

                                Çalışan

                                Svol Danışmanlık çalışanı olan gerçek kişiler.

                                Çalışan Adayı

                                Svol Danışmanlık çalışanı olmayan ancak çeşitli yöntemlerle Svol Danışmanlık çalışan adayı statüsünde olan gerçek kişiler.

                                Kişisel Sağlık Verisi

                                Kimliği belirli veya belirlenebilir gerçek kişiye ilişkin her türlü sağlık bilgisi.

                                Kişisel Veri

                                Kimliği belirli veya belirlenebilir gerçek kişiye ilişkin her türlü bilgi.

                                Veri Sahibi

                                Kişisel verisi işlenen gerçek kişi.

                                Kişisel Verilerin İşlenmesi

                                Kişisel verilerin tamamen veya kısmen otomatik olan ya da herhangi bir veri kayıt sisteminin parçası olmak kaydıyla otomatik olmayan yollarla elde edilmesi, kaydedilmesi, depolanması, muhafaza edilmesi, değiştirilmesi, yeniden düzenlenmesi, açıklanması, aktarılması, devralınması, elde edilebilir hale getirilmesi, sınıflandırılması ya da kullanılmasının engellenmesi gibi veriler üzerinde gerçekleştirilen her türlü işlem.

                                Kanun

                                7 Nisan 2016 tarihli ve 29677 sayılı Resmi Gazete’de yayımlanan 6698 sayılı Kişisel Verilerin Korunması Kanunu.

                                Özel Nitelikli Kişisel Veri

                                Irk, etnik köken, siyasi düşünce, felsefi inanç, din, mezhep veya diğer inançlar, kılık kıyafet, dernek vakıf ya da sendika üyeliği, sağlık, cinsel hayat, ceza mahkumiyeti ve güvenlik tedbirleriyle ilgili veriler ile biyometrik ve genetik veriler.

                                Politika

                                Svol Danışmanlık  Kişisel Verilerin İşlenmesi ve Korunması Politikası.

                                Şirket /Svol Danışmanlık

                                Svol Danışmanlık

                                İş Ortakları

                                Svol Danışmanlık’nun ticari faaliyetleri çerçevesinde sözleşmesel ilişkiler kapsamında ortaklık kurduğu kişiler.

                                Veri Sahibi

                                Kişisel verisi işlenen gerçek kişi.

                                Veri İşleyen

                                Veri sorumlusunun verdiği yetkiye dayanarak onun adına kişisel veri işleyen gerçek ve tüzel kişidir.

                                Veri Sorumlusu

                                Kişisel verilerin işlenme amaçlarını ve vasıtalarını belirleyen, verilerin sistematik bir şekilde tutulduğu yeri yöneten kişidir.

                                ')  }}</p></div>

                        </div>

                    </div>
                </div>
                <!-- End .service-entry-->
            </div>
            <!-- End .col-lg-8-->
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>

@include('widgets.footer')
