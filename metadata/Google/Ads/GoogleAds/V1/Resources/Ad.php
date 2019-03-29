<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/ad.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Resources;

class Ad
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\AdTypeInfos::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\CustomParameter::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\UrlCollection::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\AdType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\Device::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\SystemManagedEntitySource::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd140a2a676f6f676c652f6164732f676f6f676c656164732f76312f72" .
            "65736f75726365732f61642e70726f746f1221676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e7265736f75726365731a35676f6f676c65" .
            "2f6164732f676f6f676c656164732f76312f636f6d6d6f6e2f637573746f" .
            "6d5f706172616d657465722e70726f746f1a33676f6f676c652f6164732f" .
            "676f6f676c656164732f76312f636f6d6d6f6e2f75726c5f636f6c6c6563" .
            "74696f6e2e70726f746f1a2b676f6f676c652f6164732f676f6f676c6561" .
            "64732f76312f656e756d732f61645f747970652e70726f746f1a2a676f6f" .
            "676c652f6164732f676f6f676c656164732f76312f656e756d732f646576" .
            "6963652e70726f746f1a40676f6f676c652f6164732f676f6f676c656164" .
            "732f76312f656e756d732f73797374656d5f6d616e616765645f656e7469" .
            "74795f736f757263652e70726f746f1a1e676f6f676c652f70726f746f62" .
            "75662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f" .
            "616e6e6f746174696f6e732e70726f746f22b70f0a02416412270a026964" .
            "18012001280b321b2e676f6f676c652e70726f746f6275662e496e743634" .
            "56616c756512300a0a66696e616c5f75726c7318022003280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c756512370a1166" .
            "696e616c5f6d6f62696c655f75726c7318102003280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c7565123b0a1574726163" .
            "6b696e675f75726c5f74656d706c617465180c2001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c7565124e0a1575726c" .
            "5f637573746f6d5f706172616d6574657273180a2003280b322f2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e4375" .
            "73746f6d506172616d6574657212310a0b646973706c61795f75726c1804" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c7565123e0a047479706518052001280e32302e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e656e756d732e416454797065456e75" .
            "6d2e41645479706512370a1361646465645f62795f676f6f676c655f6164" .
            "7318132001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c" .
            "56616c7565124b0a116465766963655f707265666572656e636518142001" .
            "280e32302e676f6f676c652e6164732e676f6f676c656164732e76312e65" .
            "6e756d732e446576696365456e756d2e44657669636512460a0f75726c5f" .
            "636f6c6c656374696f6e73181a2003280b322d2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e636f6d6d6f6e2e55726c436f6c6c6563" .
            "74696f6e122a0a046e616d6518172001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c75651282010a1e73797374656d5f" .
            "6d616e616765645f7265736f757263655f736f75726365181b2001280e32" .
            "5a2e676f6f676c652e6164732e676f6f676c656164732e76312e656e756d" .
            "732e53797374656d4d616e616765645265736f75726365536f7572636545" .
            "6e756d2e53797374656d4d616e616765645265736f75726365536f757263" .
            "65123d0a07746578745f616418062001280b322a2e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e636f6d6d6f6e2e546578744164496e" .
            "666f4800124e0a10657870616e6465645f746578745f616418072001280b" .
            "32322e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d" .
            "6d6f6e2e457870616e646564546578744164496e666f480012460a0c6361" .
            "6c6c5f6f6e6c795f6164180d2001280b322e2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e636f6d6d6f6e2e43616c6c4f6e6c794164" .
            "496e666f480012610a1a657870616e6465645f64796e616d69635f736561" .
            "7263685f6164180e2001280b323b2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e636f6d6d6f6e2e457870616e64656444796e616d69" .
            "635365617263684164496e666f4800123f0a08686f74656c5f6164180f20" .
            "01280b322b2e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "636f6d6d6f6e2e486f74656c4164496e666f480012500a1173686f707069" .
            "6e675f736d6172745f616418112001280b32332e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e636f6d6d6f6e2e53686f7070696e6753" .
            "6d6172744164496e666f480012540a1373686f7070696e675f70726f6475" .
            "63745f616418122001280b32352e676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e636f6d6d6f6e2e53686f7070696e6750726f64756374" .
            "4164496e666f4800123f0a08676d61696c5f616418152001280b322b2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e" .
            "476d61696c4164496e666f4800123f0a08696d6167655f61641816200128" .
            "0b322b2e676f6f676c652e6164732e676f6f676c656164732e76312e636f" .
            "6d6d6f6e2e496d6167654164496e666f4800123f0a08766964656f5f6164" .
            "18182001280b322b2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e636f6d6d6f6e2e566964656f4164496e666f480012560a14726573" .
            "706f6e736976655f7365617263685f616418192001280b32362e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e526573" .
            "706f6e736976655365617263684164496e666f480012650a1c6c65676163" .
            "795f726573706f6e736976655f646973706c61795f6164181c2001280b32" .
            "3d2e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d" .
            "6f6e2e4c6567616379526573706f6e73697665446973706c61794164496e" .
            "666f4800123b0a066170705f6164181d2001280b32292e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e636f6d6d6f6e2e417070416449" .
            "6e666f480012570a156c65676163795f6170705f696e7374616c6c5f6164" .
            "181e2001280b32362e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e636f6d6d6f6e2e4c6567616379417070496e7374616c6c4164496e" .
            "666f480012580a15726573706f6e736976655f646973706c61795f616418" .
            "1f2001280b32372e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e636f6d6d6f6e2e526573706f6e73697665446973706c61794164496e" .
            "666f480042090a0761645f6461746142f4010a25636f6d2e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e7265736f7572636573420741" .
            "6450726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f6765" .
            "6e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164" .
            "732f76312f7265736f75726365733b7265736f7572636573a20203474141" .
            "aa0221476f6f676c652e4164732e476f6f676c654164732e56312e526573" .
            "6f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c" .
            "56315c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f" .
            "6f676c654164733a3a56313a3a5265736f7572636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
