<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/data.proto

namespace GPBMetadata\Google\Devtools\Clouddebugger\V2;

class Data
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Devtools\Source\V1\SourceContext::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a96150a2b676f6f676c652f646576746f6f6c732f636c6f756464656275" .
            "676765722f76322f646174612e70726f746f1220676f6f676c652e646576" .
            "746f6f6c732e636c6f756464656275676765722e76321a1f676f6f676c65" .
            "2f70726f746f6275662f74696d657374616d702e70726f746f1a1e676f6f" .
            "676c652f70726f746f6275662f77726170706572732e70726f746f1a1c67" .
            "6f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22330a" .
            "0d466f726d61744d657373616765120e0a06666f726d6174180120012809" .
            "12120a0a706172616d657465727318022003280922e4020a0d5374617475" .
            "734d65737361676512100a0869735f6572726f72180120012808124c0a09" .
            "7265666572735f746f18022001280e32392e676f6f676c652e646576746f" .
            "6f6c732e636c6f756464656275676765722e76322e5374617475734d6573" .
            "736167652e5265666572656e636512440a0b6465736372697074696f6e18" .
            "032001280b322f2e676f6f676c652e646576746f6f6c732e636c6f756464" .
            "656275676765722e76322e466f726d61744d65737361676522ac010a0952" .
            "65666572656e6365120f0a0b554e5350454349464945441000121e0a1a42" .
            "5245414b504f494e545f534f555243455f4c4f434154494f4e100312180a" .
            "14425245414b504f494e545f434f4e444954494f4e100412190a15425245" .
            "414b504f494e545f45585052455353494f4e100712120a0e425245414b50" .
            "4f494e545f414745100812110a0d5641524941424c455f4e414d45100512" .
            "120a0e5641524941424c455f56414c55451006223c0a0e536f757263654c" .
            "6f636174696f6e120c0a0470617468180120012809120c0a046c696e6518" .
            "0220012805120e0a06636f6c756d6e18032001280522e9010a0856617269" .
            "61626c65120c0a046e616d65180120012809120d0a0576616c7565180220" .
            "012809120c0a0474797065180620012809123b0a076d656d626572731803" .
            "2003280b322a2e676f6f676c652e646576746f6f6c732e636c6f75646465" .
            "6275676765722e76322e5661726961626c6512340a0f7661725f7461626c" .
            "655f696e64657818042001280b321b2e676f6f676c652e70726f746f6275" .
            "662e496e74333256616c7565123f0a0673746174757318052001280b322f" .
            "2e676f6f676c652e646576746f6f6c732e636c6f75646465627567676572" .
            "2e76322e5374617475734d65737361676522dd010a0a537461636b467261" .
            "6d6512100a0866756e6374696f6e18012001280912420a086c6f63617469" .
            "6f6e18022001280b32302e676f6f676c652e646576746f6f6c732e636c6f" .
            "756464656275676765722e76322e536f757263654c6f636174696f6e123d" .
            "0a09617267756d656e747318032003280b322a2e676f6f676c652e646576" .
            "746f6f6c732e636c6f756464656275676765722e76322e5661726961626c" .
            "65123a0a066c6f63616c7318042003280b322a2e676f6f676c652e646576" .
            "746f6f6c732e636c6f756464656275676765722e76322e5661726961626c" .
            "652297070a0a427265616b706f696e74120a0a0269641801200128091243" .
            "0a06616374696f6e180d2001280e32332e676f6f676c652e646576746f6f" .
            "6c732e636c6f756464656275676765722e76322e427265616b706f696e74" .
            "2e416374696f6e12420a086c6f636174696f6e18022001280b32302e676f" .
            "6f676c652e646576746f6f6c732e636c6f756464656275676765722e7632" .
            "2e536f757263654c6f636174696f6e12110a09636f6e646974696f6e1803" .
            "2001280912130a0b65787072657373696f6e73180420032809121a0a126c" .
            "6f675f6d6573736167655f666f726d6174180e2001280912480a096c6f67" .
            "5f6c6576656c180f2001280e32352e676f6f676c652e646576746f6f6c73" .
            "2e636c6f756464656275676765722e76322e427265616b706f696e742e4c" .
            "6f674c6576656c12160a0e69735f66696e616c5f73746174651805200128" .
            "08122f0a0b6372656174655f74696d65180b2001280b321a2e676f6f676c" .
            "652e70726f746f6275662e54696d657374616d70122e0a0a66696e616c5f" .
            "74696d65180c2001280b321a2e676f6f676c652e70726f746f6275662e54" .
            "696d657374616d7012120a0a757365725f656d61696c181020012809123f" .
            "0a06737461747573180a2001280b322f2e676f6f676c652e646576746f6f" .
            "6c732e636c6f756464656275676765722e76322e5374617475734d657373" .
            "61676512420a0c737461636b5f6672616d657318072003280b322c2e676f" .
            "6f676c652e646576746f6f6c732e636c6f756464656275676765722e7632" .
            "2e537461636b4672616d6512490a156576616c75617465645f6578707265" .
            "7373696f6e7318082003280b322a2e676f6f676c652e646576746f6f6c73" .
            "2e636c6f756464656275676765722e76322e5661726961626c6512420a0e" .
            "7661726961626c655f7461626c6518092003280b322a2e676f6f676c652e" .
            "646576746f6f6c732e636c6f756464656275676765722e76322e56617269" .
            "61626c6512480a066c6162656c7318112003280b32382e676f6f676c652e" .
            "646576746f6f6c732e636c6f756464656275676765722e76322e42726561" .
            "6b706f696e742e4c6162656c73456e7472791a2d0a0b4c6162656c73456e" .
            "747279120b0a036b6579180120012809120d0a0576616c75651802200128" .
            "093a023801221e0a06416374696f6e120b0a074341505455524510001207" .
            "0a034c4f471001222c0a084c6f674c6576656c12080a04494e464f100012" .
            "0b0a075741524e494e47100112090a054552524f52100222df030a084465" .
            "627567676565120a0a026964180120012809120f0a0770726f6a65637418" .
            "022001280912120a0a756e697175696669657218032001280912130a0b64" .
            "65736372697074696f6e18042001280912130a0b69735f696e6163746976" .
            "6518052001280812150a0d6167656e745f76657273696f6e180620012809" .
            "12130a0b69735f64697361626c6564180720012808123f0a067374617475" .
            "7318082001280b322f2e676f6f676c652e646576746f6f6c732e636c6f75" .
            "6464656275676765722e76322e5374617475734d65737361676512410a0f" .
            "736f757263655f636f6e746578747318092003280b32282e676f6f676c65" .
            "2e646576746f6f6c732e736f757263652e76312e536f75726365436f6e74" .
            "65787412510a136578745f736f757263655f636f6e7465787473180d2003" .
            "280b32302e676f6f676c652e646576746f6f6c732e736f757263652e7631" .
            "2e457874656e646564536f75726365436f6e746578744202180112460a06" .
            "6c6162656c73180b2003280b32362e676f6f676c652e646576746f6f6c73" .
            "2e636c6f756464656275676765722e76322e44656275676765652e4c6162" .
            "656c73456e7472791a2d0a0b4c6162656c73456e747279120b0a036b6579" .
            "180120012809120d0a0576616c75651802200128093a02380142bb010a24" .
            "636f6d2e676f6f676c652e646576746f6f6c732e636c6f75646465627567" .
            "6765722e763242094461746150726f746f50015a4d676f6f676c652e676f" .
            "6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f64" .
            "6576746f6f6c732f636c6f756464656275676765722f76323b636c6f7564" .
            "6465627567676572f80101aa0218476f6f676c652e436c6f75642e446562" .
            "75676765722e5632ca0218476f6f676c655c436c6f75645c446562756767" .
            "65725c5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

