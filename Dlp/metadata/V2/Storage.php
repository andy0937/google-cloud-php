<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace GPBMetadata\Google\Privacy\Dlp\V2;

class Storage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af0230a23676f6f676c652f707269766163792f646c702f76322f73746f" .
            "726167652e70726f746f1215676f6f676c652e707269766163792e646c70" .
            "2e76321a1f676f6f676c652f70726f746f6275662f74696d657374616d70" .
            "2e70726f746f22180a08496e666f54797065120c0a046e616d6518012001" .
            "2809224b0a0a53746f72656454797065120c0a046e616d65180120012809" .
            "122f0a0b6372656174655f74696d6518022001280b321a2e676f6f676c65" .
            "2e70726f746f6275662e54696d657374616d7022b10b0a0e437573746f6d" .
            "496e666f5479706512320a09696e666f5f7479706518012001280b321f2e" .
            "676f6f676c652e707269766163792e646c702e76322e496e666f54797065" .
            "12350a0a6c696b656c69686f6f6418062001280e32212e676f6f676c652e" .
            "707269766163792e646c702e76322e4c696b656c69686f6f6412460a0a64" .
            "696374696f6e61727918022001280b32302e676f6f676c652e7072697661" .
            "63792e646c702e76322e437573746f6d496e666f547970652e4469637469" .
            "6f6e6172794800123c0a05726567657818032001280b322b2e676f6f676c" .
            "652e707269766163792e646c702e76322e437573746f6d496e666f547970" .
            "652e52656765784800124d0a0e737572726f676174655f74797065180420" .
            "01280b32332e676f6f676c652e707269766163792e646c702e76322e4375" .
            "73746f6d496e666f547970652e537572726f676174655479706548001238" .
            "0a0b73746f7265645f7479706518052001280b32212e676f6f676c652e70" .
            "7269766163792e646c702e76322e53746f726564547970654800124c0a0f" .
            "646574656374696f6e5f72756c657318072003280b32332e676f6f676c65" .
            "2e707269766163792e646c702e76322e437573746f6d496e666f54797065" .
            "2e446574656374696f6e52756c65124b0a0e6578636c7573696f6e5f7479" .
            "706518082001280e32332e676f6f676c652e707269766163792e646c702e" .
            "76322e437573746f6d496e666f547970652e4578636c7573696f6e547970" .
            "651ac8010a0a44696374696f6e617279124e0a09776f72645f6c69737418" .
            "012001280b32392e676f6f676c652e707269766163792e646c702e76322e" .
            "437573746f6d496e666f547970652e44696374696f6e6172792e576f7264" .
            "4c697374480012450a12636c6f75645f73746f726167655f706174681803" .
            "2001280b32272e676f6f676c652e707269766163792e646c702e76322e43" .
            "6c6f756453746f726167655061746848001a190a08576f72644c69737412" .
            "0d0a05776f72647318012003280942080a06736f757263651a180a055265" .
            "676578120f0a077061747465726e1801200128091a0f0a0d537572726f67" .
            "617465547970651abe040a0d446574656374696f6e52756c6512570a0c68" .
            "6f74776f72645f72756c6518012001280b323f2e676f6f676c652e707269" .
            "766163792e646c702e76322e437573746f6d496e666f547970652e446574" .
            "656374696f6e52756c652e486f74776f726452756c6548001a380a095072" .
            "6f78696d69747912150a0d77696e646f775f6265666f7265180120012805" .
            "12140a0c77696e646f775f61667465721802200128051a82010a144c696b" .
            "656c69686f6f6441646a7573746d656e74123d0a1066697865645f6c696b" .
            "656c69686f6f6418012001280e32212e676f6f676c652e70726976616379" .
            "2e646c702e76322e4c696b656c69686f6f644800121d0a1372656c617469" .
            "76655f6c696b656c69686f6f641802200128054800420c0a0a61646a7573" .
            "746d656e741a8c020a0b486f74776f726452756c6512420a0d686f74776f" .
            "72645f726567657818012001280b322b2e676f6f676c652e707269766163" .
            "792e646c702e76322e437573746f6d496e666f547970652e526567657812" .
            "500a0970726f78696d69747918022001280b323d2e676f6f676c652e7072" .
            "69766163792e646c702e76322e437573746f6d496e666f547970652e4465" .
            "74656374696f6e52756c652e50726f78696d69747912670a156c696b656c" .
            "69686f6f645f61646a7573746d656e7418032001280b32482e676f6f676c" .
            "652e707269766163792e646c702e76322e437573746f6d496e666f547970" .
            "652e446574656374696f6e52756c652e4c696b656c69686f6f6441646a75" .
            "73746d656e7442060a0474797065224b0a0d4578636c7573696f6e547970" .
            "65121e0a1a4558434c5553494f4e5f545950455f554e5350454349464945" .
            "441000121a0a164558434c5553494f4e5f545950455f4558434c55444510" .
            "0142060a047479706522170a074669656c644964120c0a046e616d651801" .
            "2001280922370a0b506172746974696f6e496412120a0a70726f6a656374" .
            "5f696418022001280912140a0c6e616d6573706163655f69641804200128" .
            "09221e0a0e4b696e6445787072657373696f6e120c0a046e616d65180120" .
            "0128092281010a104461746173746f72654f7074696f6e7312380a0c7061" .
            "72746974696f6e5f696418012001280b32222e676f6f676c652e70726976" .
            "6163792e646c702e76322e506172746974696f6e496412330a046b696e64" .
            "18022001280b32252e676f6f676c652e707269766163792e646c702e7632" .
            "2e4b696e6445787072657373696f6e225d0a18436c6f756453746f726167" .
            "65526567657846696c6553657412130a0b6275636b65745f6e616d651801" .
            "2001280912150a0d696e636c7564655f726567657818022003280912150a" .
            "0d6578636c7564655f726567657818032003280922ec030a13436c6f7564" .
            "53746f726167654f7074696f6e7312440a0866696c655f73657418012001" .
            "280b32322e676f6f676c652e707269766163792e646c702e76322e436c6f" .
            "756453746f726167654f7074696f6e732e46696c65536574121c0a146279" .
            "7465735f6c696d69745f7065725f66696c6518042001280312240a1c6279" .
            "7465735f6c696d69745f7065725f66696c655f70657263656e7418082001" .
            "280512330a0a66696c655f747970657318052003280e321f2e676f6f676c" .
            "652e707269766163792e646c702e76322e46696c6554797065124e0a0d73" .
            "616d706c655f6d6574686f6418062001280e32372e676f6f676c652e7072" .
            "69766163792e646c702e76322e436c6f756453746f726167654f7074696f" .
            "6e732e53616d706c654d6574686f64121b0a1366696c65735f6c696d6974" .
            "5f70657263656e741807200128051a5f0a0746696c65536574120b0a0375" .
            "726c18012001280912470a0e72656765785f66696c655f73657418022001" .
            "280b322f2e676f6f676c652e707269766163792e646c702e76322e436c6f" .
            "756453746f72616765526567657846696c6553657422480a0c53616d706c" .
            "654d6574686f64121d0a1953414d504c455f4d4554484f445f554e535045" .
            "434946494544100012070a03544f50100112100a0c52414e444f4d5f5354" .
            "415254100222220a13436c6f756453746f7261676546696c65536574120b" .
            "0a0375726c18012001280922200a10436c6f756453746f72616765506174" .
            "68120c0a0470617468180120012809228b030a0f42696751756572794f70" .
            "74696f6e73123d0a0f7461626c655f7265666572656e636518012001280b" .
            "32242e676f6f676c652e707269766163792e646c702e76322e4269675175" .
            "6572795461626c65123a0a126964656e74696679696e675f6669656c6473" .
            "18022003280b321e2e676f6f676c652e707269766163792e646c702e7632" .
            "2e4669656c64496412120a0a726f77735f6c696d6974180320012803121a" .
            "0a12726f77735f6c696d69745f70657263656e74180620012805124a0a0d" .
            "73616d706c655f6d6574686f6418042001280e32332e676f6f676c652e70" .
            "7269766163792e646c702e76322e42696751756572794f7074696f6e732e" .
            "53616d706c654d6574686f6412370a0f6578636c756465645f6669656c64" .
            "7318052003280b321e2e676f6f676c652e707269766163792e646c702e76" .
            "322e4669656c64496422480a0c53616d706c654d6574686f64121d0a1953" .
            "414d504c455f4d4554484f445f554e535045434946494544100012070a03" .
            "544f50100112100a0c52414e444f4d5f53544152541002229a040a0d5374" .
            "6f72616765436f6e66696712440a116461746173746f72655f6f7074696f" .
            "6e7318022001280b32272e676f6f676c652e707269766163792e646c702e" .
            "76322e4461746173746f72654f7074696f6e734800124b0a15636c6f7564" .
            "5f73746f726167655f6f7074696f6e7318032001280b322a2e676f6f676c" .
            "652e707269766163792e646c702e76322e436c6f756453746f726167654f" .
            "7074696f6e73480012430a116269675f71756572795f6f7074696f6e7318" .
            "042001280b32262e676f6f676c652e707269766163792e646c702e76322e" .
            "42696751756572794f7074696f6e734800124c0a0f74696d657370616e5f" .
            "636f6e66696718062001280b32332e676f6f676c652e707269766163792e" .
            "646c702e76322e53746f72616765436f6e6669672e54696d657370616e43" .
            "6f6e6669671ada010a0e54696d657370616e436f6e666967122e0a0a7374" .
            "6172745f74696d6518012001280b321a2e676f6f676c652e70726f746f62" .
            "75662e54696d657374616d70122c0a08656e645f74696d6518022001280b" .
            "321a2e676f6f676c652e70726f746f6275662e54696d657374616d701237" .
            "0a0f74696d657374616d705f6669656c6418032001280b321e2e676f6f67" .
            "6c652e707269766163792e646c702e76322e4669656c64496412310a2965" .
            "6e61626c655f6175746f5f706f70756c6174696f6e5f6f665f74696d6573" .
            "70616e5f636f6e66696718042001280842060a047479706522600a0b4269" .
            "6751756572794b6579123d0a0f7461626c655f7265666572656e63651801" .
            "2001280b32242e676f6f676c652e707269766163792e646c702e76322e42" .
            "696751756572795461626c6512120a0a726f775f6e756d62657218022001" .
            "2803223e0a0c4461746173746f72654b6579122e0a0a656e746974795f6b" .
            "657918012001280b321a2e676f6f676c652e707269766163792e646c702e" .
            "76322e4b657922bb010a034b657912380a0c706172746974696f6e5f6964" .
            "18012001280b32222e676f6f676c652e707269766163792e646c702e7632" .
            "2e506172746974696f6e496412340a047061746818022003280b32262e67" .
            "6f6f676c652e707269766163792e646c702e76322e4b65792e5061746845" .
            "6c656d656e741a440a0b50617468456c656d656e74120c0a046b696e6418" .
            "0120012809120c0a0269641802200128034800120e0a046e616d65180320" .
            "012809480042090a0769645f74797065228e010a095265636f72644b6579" .
            "123c0a0d6461746173746f72655f6b657918022001280b32232e676f6f67" .
            "6c652e707269766163792e646c702e76322e4461746173746f72654b6579" .
            "4800123b0a0d6269675f71756572795f6b657918032001280b32222e676f" .
            "6f676c652e707269766163792e646c702e76322e42696751756572794b65" .
            "79480042060a047479706522490a0d42696751756572795461626c651212" .
            "0a0a70726f6a6563745f696418012001280912120a0a646174617365745f" .
            "696418022001280912100a087461626c655f696418032001280922730a0d" .
            "42696751756572794669656c6412330a057461626c6518012001280b3224" .
            "2e676f6f676c652e707269766163792e646c702e76322e42696751756572" .
            "795461626c65122d0a056669656c6418022001280b321e2e676f6f676c65" .
            "2e707269766163792e646c702e76322e4669656c64496422390a08456e74" .
            "6974794964122d0a056669656c6418012001280b321e2e676f6f676c652e" .
            "707269766163792e646c702e76322e4669656c6449642a740a0a4c696b65" .
            "6c69686f6f64121a0a164c494b454c49484f4f445f554e53504543494649" .
            "4544100012110a0d564552595f554e4c494b454c591001120c0a08554e4c" .
            "494b454c591002120c0a08504f535349424c451003120a0a064c494b454c" .
            "591004120f0a0b564552595f4c494b454c5910052a450a0846696c655479" .
            "706512190a1546494c455f545950455f554e535045434946494544100012" .
            "0f0a0b42494e4152595f46494c451001120d0a09544558545f46494c4510" .
            "02428f010a19636f6d2e676f6f676c652e707269766163792e646c702e76" .
            "32420a446c7053746f7261676550015a38676f6f676c652e676f6c616e67" .
            "2e6f72672f67656e70726f746f2f676f6f676c65617069732f7072697661" .
            "63792f646c702f76323b646c70aa0213476f6f676c652e436c6f75642e44" .
            "6c702e5632ca0213476f6f676c655c436c6f75645c446c705c5632620670" .
            "726f746f33"
        ));

        static::$is_initialized = true;
    }
}
