<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1;

class Jobs
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac6390a23676f6f676c652f636c6f75642f6461746170726f632f76312f" .
            "6a6f62732e70726f746f1218676f6f676c652e636c6f75642e6461746170" .
            "726f632e76311a17676f6f676c652f6170692f636c69656e742e70726f74" .
            "6f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70" .
            "726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e7072" .
            "6f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d6173" .
            "6b2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d6573" .
            "74616d702e70726f746f22c1020a0d4c6f6767696e67436f6e6669671257" .
            "0a116472697665725f6c6f675f6c6576656c7318022003280b323c2e676f" .
            "6f676c652e636c6f75642e6461746170726f632e76312e4c6f6767696e67" .
            "436f6e6669672e4472697665724c6f674c6576656c73456e7472791a650a" .
            "144472697665724c6f674c6576656c73456e747279120b0a036b65791801" .
            "20012809123c0a0576616c756518022001280e322d2e676f6f676c652e63" .
            "6c6f75642e6461746170726f632e76312e4c6f6767696e67436f6e666967" .
            "2e4c6576656c3a02380122700a054c6576656c12150a114c4556454c5f55" .
            "4e535045434946494544100012070a03414c4c100112090a055452414345" .
            "100212090a054445425547100312080a04494e464f100412080a04574152" .
            "4e100512090a054552524f52100612090a05464154414c100712070a034f" .
            "4646100822f1020a094861646f6f704a6f62121b0a116d61696e5f6a6172" .
            "5f66696c655f757269180120012809480012140a0a6d61696e5f636c6173" .
            "73180220012809480012110a04617267731803200328094203e04101121a" .
            "0a0d6a61725f66696c655f757269731804200328094203e0410112160a09" .
            "66696c655f757269731805200328094203e0410112190a0c617263686976" .
            "655f757269731806200328094203e04101124c0a0a70726f706572746965" .
            "7318072003280b32332e676f6f676c652e636c6f75642e6461746170726f" .
            "632e76312e4861646f6f704a6f622e50726f70657274696573456e747279" .
            "4203e0410112440a0e6c6f6767696e675f636f6e66696718082001280b32" .
            "272e676f6f676c652e636c6f75642e6461746170726f632e76312e4c6f67" .
            "67696e67436f6e6669674203e041011a310a0f50726f7065727469657345" .
            "6e747279120b0a036b6579180120012809120d0a0576616c756518022001" .
            "28093a02380142080a0664726976657222ef020a08537061726b4a6f6212" .
            "1b0a116d61696e5f6a61725f66696c655f75726918012001280948001214" .
            "0a0a6d61696e5f636c617373180220012809480012110a04617267731803" .
            "200328094203e04101121a0a0d6a61725f66696c655f7572697318042003" .
            "28094203e0410112160a0966696c655f757269731805200328094203e041" .
            "0112190a0c617263686976655f757269731806200328094203e04101124b" .
            "0a0a70726f7065727469657318072003280b32322e676f6f676c652e636c" .
            "6f75642e6461746170726f632e76312e537061726b4a6f622e50726f7065" .
            "7274696573456e7472794203e0410112440a0e6c6f6767696e675f636f6e" .
            "66696718082001280b32272e676f6f676c652e636c6f75642e6461746170" .
            "726f632e76312e4c6f6767696e67436f6e6669674203e041011a310a0f50" .
            "726f70657274696573456e747279120b0a036b6579180120012809120d0a" .
            "0576616c75651802200128093a02380142080a0664726976657222f8020a" .
            "0a5079537061726b4a6f6212210a146d61696e5f707974686f6e5f66696c" .
            "655f7572691801200128094203e0410212110a0461726773180220032809" .
            "4203e04101121d0a10707974686f6e5f66696c655f757269731803200328" .
            "094203e04101121a0a0d6a61725f66696c655f7572697318042003280942" .
            "03e0410112160a0966696c655f757269731805200328094203e041011219" .
            "0a0c617263686976655f757269731806200328094203e04101124d0a0a70" .
            "726f7065727469657318072003280b32342e676f6f676c652e636c6f7564" .
            "2e6461746170726f632e76312e5079537061726b4a6f622e50726f706572" .
            "74696573456e7472794203e0410112440a0e6c6f6767696e675f636f6e66" .
            "696718082001280b32272e676f6f676c652e636c6f75642e646174617072" .
            "6f632e76312e4c6f6767696e67436f6e6669674203e041011a310a0f5072" .
            "6f70657274696573456e747279120b0a036b6579180120012809120d0a05" .
            "76616c75651802200128093a02380122210a0951756572794c6973741214" .
            "0a07717565726965731801200328094203e0410222b5030a07486976654a" .
            "6f6212180a0e71756572795f66696c655f75726918012001280948001239" .
            "0a0a71756572795f6c69737418022001280b32232e676f6f676c652e636c" .
            "6f75642e6461746170726f632e76312e51756572794c697374480012200a" .
            "13636f6e74696e75655f6f6e5f6661696c7572651803200128084203e041" .
            "0112550a107363726970745f7661726961626c657318042003280b32362e" .
            "676f6f676c652e636c6f75642e6461746170726f632e76312e486976654a" .
            "6f622e5363726970745661726961626c6573456e7472794203e04101124a" .
            "0a0a70726f7065727469657318052003280b32312e676f6f676c652e636c" .
            "6f75642e6461746170726f632e76312e486976654a6f622e50726f706572" .
            "74696573456e7472794203e04101121a0a0d6a61725f66696c655f757269" .
            "731806200328094203e041011a360a145363726970745661726961626c65" .
            "73456e747279120b0a036b6579180120012809120d0a0576616c75651802" .
            "200128093a0238011a310a0f50726f70657274696573456e747279120b0a" .
            "036b6579180120012809120d0a0576616c75651802200128093a02380142" .
            "090a077175657269657322e5030a0b537061726b53716c4a6f6212180a0e" .
            "71756572795f66696c655f757269180120012809480012390a0a71756572" .
            "795f6c69737418022001280b32232e676f6f676c652e636c6f75642e6461" .
            "746170726f632e76312e51756572794c697374480012590a107363726970" .
            "745f7661726961626c657318032003280b323a2e676f6f676c652e636c6f" .
            "75642e6461746170726f632e76312e537061726b53716c4a6f622e536372" .
            "6970745661726961626c6573456e7472794203e04101124e0a0a70726f70" .
            "65727469657318042003280b32352e676f6f676c652e636c6f75642e6461" .
            "746170726f632e76312e537061726b53716c4a6f622e50726f7065727469" .
            "6573456e7472794203e04101121a0a0d6a61725f66696c655f7572697318" .
            "38200328094203e0410112440a0e6c6f6767696e675f636f6e6669671806" .
            "2001280b32272e676f6f676c652e636c6f75642e6461746170726f632e76" .
            "312e4c6f6767696e67436f6e6669674203e041011a360a14536372697074" .
            "5661726961626c6573456e747279120b0a036b6579180120012809120d0a" .
            "0576616c75651802200128093a0238011a310a0f50726f70657274696573" .
            "456e747279120b0a036b6579180120012809120d0a0576616c7565180220" .
            "0128093a02380142090a077175657269657322f8030a065069674a6f6212" .
            "180a0e71756572795f66696c655f757269180120012809480012390a0a71" .
            "756572795f6c69737418022001280b32232e676f6f676c652e636c6f7564" .
            "2e6461746170726f632e76312e51756572794c697374480012200a13636f" .
            "6e74696e75655f6f6e5f6661696c7572651803200128084203e041011254" .
            "0a107363726970745f7661726961626c657318042003280b32352e676f6f" .
            "676c652e636c6f75642e6461746170726f632e76312e5069674a6f622e53" .
            "63726970745661726961626c6573456e7472794203e0410112490a0a7072" .
            "6f7065727469657318052003280b32302e676f6f676c652e636c6f75642e" .
            "6461746170726f632e76312e5069674a6f622e50726f7065727469657345" .
            "6e7472794203e04101121a0a0d6a61725f66696c655f7572697318062003" .
            "28094203e0410112440a0e6c6f6767696e675f636f6e6669671807200128" .
            "0b32272e676f6f676c652e636c6f75642e6461746170726f632e76312e4c" .
            "6f6767696e67436f6e6669674203e041011a360a14536372697074566172" .
            "6961626c6573456e747279120b0a036b6579180120012809120d0a057661" .
            "6c75651802200128093a0238011a310a0f50726f70657274696573456e74" .
            "7279120b0a036b6579180120012809120d0a0576616c7565180220012809" .
            "3a02380142090a077175657269657322440a0c4a6f62506c6163656d656e" .
            "7412190a0c636c75737465725f6e616d651801200128094203e041021219" .
            "0a0c636c75737465725f757569641802200128094203e0410322d9030a09" .
            "4a6f62537461747573123d0a05737461746518012001280e32292e676f6f" .
            "676c652e636c6f75642e6461746170726f632e76312e4a6f625374617475" .
            "732e53746174654203e0410312170a0764657461696c7318022001280942" .
            "06e04103e0410112390a1073746174655f73746172745f74696d65180620" .
            "01280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d" .
            "704203e0410312430a08737562737461746518072001280e322c2e676f6f" .
            "676c652e636c6f75642e6461746170726f632e76312e4a6f625374617475" .
            "732e53756273746174654203e0410322a9010a05537461746512150a1153" .
            "544154455f554e5350454349464945441000120b0a0750454e44494e4710" .
            "01120e0a0a53455455505f444f4e451008120b0a0752554e4e494e471002" .
            "12120a0e43414e43454c5f50454e44494e47100312120a0e43414e43454c" .
            "5f535441525445441007120d0a0943414e43454c4c4544100412080a0444" .
            "4f4e45100512090a054552524f52100612130a0f415454454d50545f4641" .
            "494c555245100922480a085375627374617465120f0a0b554e5350454349" .
            "464945441000120d0a095355424d49545445441001120a0a065155455545" .
            "44100212100a0c5354414c455f5354415455531003223c0a0c4a6f625265" .
            "666572656e636512170a0a70726f6a6563745f69641801200128094203e0" .
            "410212130a066a6f625f69641802200128094203e0410122a5020a0f5961" .
            "726e4170706c69636174696f6e12110a046e616d651801200128094203e0" .
            "410212430a05737461746518022001280e322f2e676f6f676c652e636c6f" .
            "75642e6461746170726f632e76312e5961726e4170706c69636174696f6e" .
            "2e53746174654203e0410212150a0870726f677265737318032001280242" .
            "03e0410212190a0c747261636b696e675f75726c1804200128094203e041" .
            "012287010a05537461746512150a1153544154455f554e53504543494649" .
            "4544100012070a034e45571001120e0a0a4e45575f534156494e47100212" .
            "0d0a095355424d49545445441003120c0a0841434345505445441004120b" .
            "0a0752554e4e494e471005120c0a0846494e49534845441006120a0a0646" .
            "41494c45441007120a0a064b494c4c4544100822cd070a034a6f62123e0a" .
            "097265666572656e636518012001280b32262e676f6f676c652e636c6f75" .
            "642e6461746170726f632e76312e4a6f625265666572656e63654203e041" .
            "01123e0a09706c6163656d656e7418022001280b32262e676f6f676c652e" .
            "636c6f75642e6461746170726f632e76312e4a6f62506c6163656d656e74" .
            "4203e0410212390a0a6861646f6f705f6a6f6218032001280b32232e676f" .
            "6f676c652e636c6f75642e6461746170726f632e76312e4861646f6f704a" .
            "6f62480012370a09737061726b5f6a6f6218042001280b32222e676f6f67" .
            "6c652e636c6f75642e6461746170726f632e76312e537061726b4a6f6248" .
            "00123b0a0b7079737061726b5f6a6f6218052001280b32242e676f6f676c" .
            "652e636c6f75642e6461746170726f632e76312e5079537061726b4a6f62" .
            "480012350a08686976655f6a6f6218062001280b32212e676f6f676c652e" .
            "636c6f75642e6461746170726f632e76312e486976654a6f62480012330a" .
            "077069675f6a6f6218072001280b32202e676f6f676c652e636c6f75642e" .
            "6461746170726f632e76312e5069674a6f624800123e0a0d737061726b5f" .
            "73716c5f6a6f62180c2001280b32252e676f6f676c652e636c6f75642e64" .
            "61746170726f632e76312e537061726b53716c4a6f62480012380a067374" .
            "6174757318082001280b32232e676f6f676c652e636c6f75642e64617461" .
            "70726f632e76312e4a6f625374617475734203e0410312400a0e73746174" .
            "75735f686973746f7279180d2003280b32232e676f6f676c652e636c6f75" .
            "642e6461746170726f632e76312e4a6f625374617475734203e041031249" .
            "0a117961726e5f6170706c69636174696f6e7318092003280b32292e676f" .
            "6f676c652e636c6f75642e6461746170726f632e76312e5961726e417070" .
            "6c69636174696f6e4203e0410312270a1a6472697665725f6f7574707574" .
            "5f7265736f757263655f7572691811200128094203e0410312250a186472" .
            "697665725f636f6e74726f6c5f66696c65735f757269180f200128094203" .
            "e04103123e0a066c6162656c7318122003280b32292e676f6f676c652e63" .
            "6c6f75642e6461746170726f632e76312e4a6f622e4c6162656c73456e74" .
            "72794203e0410112400a0a7363686564756c696e6718142001280b32272e" .
            "676f6f676c652e636c6f75642e6461746170726f632e76312e4a6f625363" .
            "686564756c696e674203e0410112150a086a6f625f757569641816200128" .
            "094203e041031a2d0a0b4c6162656c73456e747279120b0a036b65791801" .
            "20012809120d0a0576616c75651802200128093a023801420a0a08747970" .
            "655f6a6f6222330a0d4a6f625363686564756c696e6712220a156d61785f" .
            "6661696c757265735f7065725f686f75721801200128054203e04101228a" .
            "010a105375626d69744a6f625265717565737412170a0a70726f6a656374" .
            "5f69641801200128094203e0410212130a06726567696f6e180320012809" .
            "4203e04102122f0a036a6f6218022001280b321d2e676f6f676c652e636c" .
            "6f75642e6461746170726f632e76312e4a6f624203e0410212170a0a7265" .
            "71756573745f69641804200128094203e0410122520a0d4765744a6f6252" .
            "65717565737412170a0a70726f6a6563745f69641801200128094203e041" .
            "0212130a06726567696f6e1803200128094203e0410212130a066a6f625f" .
            "69641802200128094203e0410222b3020a0f4c6973744a6f627352657175" .
            "65737412170a0a70726f6a6563745f69641801200128094203e041021213" .
            "0a06726567696f6e1806200128094203e0410212160a09706167655f7369" .
            "7a651802200128054203e0410112170a0a706167655f746f6b656e180320" .
            "0128094203e0410112190a0c636c75737465725f6e616d65180420012809" .
            "4203e0410112590a116a6f625f73746174655f6d61746368657218052001" .
            "280e32392e676f6f676c652e636c6f75642e6461746170726f632e76312e" .
            "4c6973744a6f6273526571756573742e4a6f6253746174654d6174636865" .
            "724203e0410112130a0666696c7465721807200128094203e0410122360a" .
            "0f4a6f6253746174654d61746368657212070a03414c4c1000120a0a0641" .
            "43544956451001120e0a0a4e4f4e5f414354495645100222bc010a105570" .
            "646174654a6f625265717565737412170a0a70726f6a6563745f69641801" .
            "200128094203e0410212130a06726567696f6e1802200128094203e04102" .
            "12130a066a6f625f69641803200128094203e04102122f0a036a6f621804" .
            "2001280b321d2e676f6f676c652e636c6f75642e6461746170726f632e76" .
            "312e4a6f624203e0410212340a0b7570646174655f6d61736b1805200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b42" .
            "03e0410222620a104c6973744a6f6273526573706f6e736512300a046a6f" .
            "627318012003280b321d2e676f6f676c652e636c6f75642e646174617072" .
            "6f632e76312e4a6f624203e04103121c0a0f6e6578745f706167655f746f" .
            "6b656e1802200128094203e0410122550a1043616e63656c4a6f62526571" .
            "7565737412170a0a70726f6a6563745f69641801200128094203e0410212" .
            "130a06726567696f6e1803200128094203e0410212130a066a6f625f6964" .
            "1802200128094203e0410222550a1044656c6574654a6f62526571756573" .
            "7412170a0a70726f6a6563745f69641801200128094203e0410212130a06" .
            "726567696f6e1803200128094203e0410212130a066a6f625f6964180220" .
            "0128094203e04102329b090a0d4a6f62436f6e74726f6c6c657212b1010a" .
            "095375626d69744a6f62122a2e676f6f676c652e636c6f75642e64617461" .
            "70726f632e76312e5375626d69744a6f62526571756573741a1d2e676f6f" .
            "676c652e636c6f75642e6461746170726f632e76312e4a6f62225982d3e4" .
            "93023b22362f76312f70726f6a656374732f7b70726f6a6563745f69647d" .
            "2f726567696f6e732f7b726567696f6e7d2f6a6f62733a7375626d69743a" .
            "012ada411570726f6a6563745f69642c726567696f6e2c6a6f6212ad010a" .
            "064765744a6f6212272e676f6f676c652e636c6f75642e6461746170726f" .
            "632e76312e4765744a6f62526571756573741a1d2e676f6f676c652e636c" .
            "6f75642e6461746170726f632e76312e4a6f62225b82d3e493023a12382f" .
            "76312f70726f6a656374732f7b70726f6a6563745f69647d2f726567696f" .
            "6e732f7b726567696f6e7d2f6a6f62732f7b6a6f625f69647dda41187072" .
            "6f6a6563745f69642c726567696f6e2c6a6f625f696412c9010a084c6973" .
            "744a6f627312292e676f6f676c652e636c6f75642e6461746170726f632e" .
            "76312e4c6973744a6f6273526571756573741a2a2e676f6f676c652e636c" .
            "6f75642e6461746170726f632e76312e4c6973744a6f6273526573706f6e" .
            "7365226682d3e4930231122f2f76312f70726f6a656374732f7b70726f6a" .
            "6563745f69647d2f726567696f6e732f7b726567696f6e7d2f6a6f6273da" .
            "411170726f6a6563745f69642c726567696f6eda411870726f6a6563745f" .
            "69642c726567696f6e2c66696c746572129d010a095570646174654a6f62" .
            "122a2e676f6f676c652e636c6f75642e6461746170726f632e76312e5570" .
            "646174654a6f62526571756573741a1d2e676f6f676c652e636c6f75642e" .
            "6461746170726f632e76312e4a6f62224582d3e493023f32382f76312f70" .
            "726f6a656374732f7b70726f6a6563745f69647d2f726567696f6e732f7b" .
            "726567696f6e7d2f6a6f62732f7b6a6f625f69647d3a036a6f6212bd010a" .
            "0943616e63656c4a6f62122a2e676f6f676c652e636c6f75642e64617461" .
            "70726f632e76312e43616e63656c4a6f62526571756573741a1d2e676f6f" .
            "676c652e636c6f75642e6461746170726f632e76312e4a6f62226582d3e4" .
            "930244223f2f76312f70726f6a656374732f7b70726f6a6563745f69647d" .
            "2f726567696f6e732f7b726567696f6e7d2f6a6f62732f7b6a6f625f6964" .
            "7d3a63616e63656c3a012ada411870726f6a6563745f69642c726567696f" .
            "6e2c6a6f625f696412ac010a0944656c6574654a6f62122a2e676f6f676c" .
            "652e636c6f75642e6461746170726f632e76312e44656c6574654a6f6252" .
            "6571756573741a162e676f6f676c652e70726f746f6275662e456d707479" .
            "225b82d3e493023a2a382f76312f70726f6a656374732f7b70726f6a6563" .
            "745f69647d2f726567696f6e732f7b726567696f6e7d2f6a6f62732f7b6a" .
            "6f625f69647dda411870726f6a6563745f69642c726567696f6e2c6a6f62" .
            "5f69641a4bca41176461746170726f632e676f6f676c65617069732e636f" .
            "6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d" .
            "2f617574682f636c6f75642d706c6174666f726d426d0a1c636f6d2e676f" .
            "6f676c652e636c6f75642e6461746170726f632e763142094a6f62735072" .
            "6f746f50015a40676f6f676c652e676f6c616e672e6f72672f67656e7072" .
            "6f746f2f676f6f676c65617069732f636c6f75642f6461746170726f632f" .
            "76313b6461746170726f63620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

