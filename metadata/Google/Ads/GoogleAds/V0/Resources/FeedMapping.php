<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/feed_mapping.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Resources;

class FeedMapping
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\AdCustomizerPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\AppPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\CallPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\CalloutPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\CustomPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\EducationPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\FeedMappingCriterionType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\FeedMappingStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\FlightPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\HotelPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\JobPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\LocalPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\MessagePlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\PlaceholderType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\PricePlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\PromotionPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\RealEstatePlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\SitelinkPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\StructuredSnippetPlaceholderField::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\TravelPlaceholderField::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aae1f0a34676f6f676c652f6164732f676f6f676c656164732f76302f72" .
            "65736f75726365732f666565645f6d617070696e672e70726f746f122167" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e7265736f757263" .
            "65731a39676f6f676c652f6164732f676f6f676c656164732f76302f656e" .
            "756d732f6170705f706c616365686f6c6465725f6669656c642e70726f74" .
            "6f1a3a676f6f676c652f6164732f676f6f676c656164732f76302f656e75" .
            "6d732f63616c6c5f706c616365686f6c6465725f6669656c642e70726f74" .
            "6f1a3d676f6f676c652f6164732f676f6f676c656164732f76302f656e75" .
            "6d732f63616c6c6f75745f706c616365686f6c6465725f6669656c642e70" .
            "726f746f1a3c676f6f676c652f6164732f676f6f676c656164732f76302f" .
            "656e756d732f637573746f6d5f706c616365686f6c6465725f6669656c64" .
            "2e70726f746f1a3f676f6f676c652f6164732f676f6f676c656164732f76" .
            "302f656e756d732f656475636174696f6e5f706c616365686f6c6465725f" .
            "6669656c642e70726f746f1a3f676f6f676c652f6164732f676f6f676c65" .
            "6164732f76302f656e756d732f666565645f6d617070696e675f63726974" .
            "6572696f6e5f747970652e70726f746f1a37676f6f676c652f6164732f67" .
            "6f6f676c656164732f76302f656e756d732f666565645f6d617070696e67" .
            "5f7374617475732e70726f746f1a3c676f6f676c652f6164732f676f6f67" .
            "6c656164732f76302f656e756d732f666c696768745f706c616365686f6c" .
            "6465725f6669656c642e70726f746f1a3b676f6f676c652f6164732f676f" .
            "6f676c656164732f76302f656e756d732f686f74656c5f706c616365686f" .
            "6c6465725f6669656c642e70726f746f1a39676f6f676c652f6164732f67" .
            "6f6f676c656164732f76302f656e756d732f6a6f625f706c616365686f6c" .
            "6465725f6669656c642e70726f746f1a3b676f6f676c652f6164732f676f" .
            "6f676c656164732f76302f656e756d732f6c6f63616c5f706c616365686f" .
            "6c6465725f6669656c642e70726f746f1a3d676f6f676c652f6164732f67" .
            "6f6f676c656164732f76302f656e756d732f6d6573736167655f706c6163" .
            "65686f6c6465725f6669656c642e70726f746f1a34676f6f676c652f6164" .
            "732f676f6f676c656164732f76302f656e756d732f706c616365686f6c64" .
            "65725f747970652e70726f746f1a3b676f6f676c652f6164732f676f6f67" .
            "6c656164732f76302f656e756d732f70726963655f706c616365686f6c64" .
            "65725f6669656c642e70726f746f1a3f676f6f676c652f6164732f676f6f" .
            "676c656164732f76302f656e756d732f70726f6d6f74696f6e5f706c6163" .
            "65686f6c6465725f6669656c642e70726f746f1a41676f6f676c652f6164" .
            "732f676f6f676c656164732f76302f656e756d732f7265616c5f65737461" .
            "74655f706c616365686f6c6465725f6669656c642e70726f746f1a3e676f" .
            "6f676c652f6164732f676f6f676c656164732f76302f656e756d732f7369" .
            "74656c696e6b5f706c616365686f6c6465725f6669656c642e70726f746f" .
            "1a48676f6f676c652f6164732f676f6f676c656164732f76302f656e756d" .
            "732f737472756374757265645f736e69707065745f706c616365686f6c64" .
            "65725f6669656c642e70726f746f1a3c676f6f676c652f6164732f676f6f" .
            "676c656164732f76302f656e756d732f74726176656c5f706c616365686f" .
            "6c6465725f6669656c642e70726f746f1a1e676f6f676c652f70726f746f" .
            "6275662f77726170706572732e70726f746f22de030a0b466565644d6170" .
            "70696e6712150a0d7265736f757263655f6e616d65180120012809122a0a" .
            "046665656418022001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c7565125a0a186174747269627574655f6669656c64" .
            "5f6d617070696e677318052003280b32382e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76302e7265736f75726365732e4174747269627574" .
            "654669656c644d617070696e6712560a0673746174757318062001280e32" .
            "462e676f6f676c652e6164732e676f6f676c656164732e76302e656e756d" .
            "732e466565644d617070696e67537461747573456e756d2e466565644d61" .
            "7070696e67537461747573125e0a10706c616365686f6c6465725f747970" .
            "6518032001280e32422e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76302e656e756d732e506c616365686f6c64657254797065456e756d2e" .
            "506c616365686f6c646572547970654800126e0a0e637269746572696f6e" .
            "5f7479706518042001280e32542e676f6f676c652e6164732e676f6f676c" .
            "656164732e76302e656e756d732e466565644d617070696e674372697465" .
            "72696f6e54797065456e756d2e466565644d617070696e67437269746572" .
            "696f6e54797065480042080a0674617267657422d10f0a15417474726962" .
            "7574654669656c644d617070696e6712360a11666565645f617474726962" .
            "7574655f696418012001280b321b2e676f6f676c652e70726f746f627566" .
            "2e496e74363456616c7565122d0a086669656c645f696418022001280b32" .
            "1b2e676f6f676c652e70726f746f6275662e496e74363456616c7565126e" .
            "0a0e736974656c696e6b5f6669656c6418032001280e32542e676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e656e756d732e536974656c" .
            "696e6b506c616365686f6c6465724669656c64456e756d2e536974656c69" .
            "6e6b506c616365686f6c6465724669656c64480012620a0a63616c6c5f66" .
            "69656c6418042001280e324c2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76302e656e756d732e43616c6c506c616365686f6c6465724669" .
            "656c64456e756d2e43616c6c506c616365686f6c6465724669656c644800" .
            "125f0a096170705f6669656c6418052001280e324a2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e656e756d732e417070506c616365" .
            "686f6c6465724669656c64456e756d2e417070506c616365686f6c646572" .
            "4669656c644800126b0a0d63616c6c6f75745f6669656c6418082001280e" .
            "32522e676f6f676c652e6164732e676f6f676c656164732e76302e656e75" .
            "6d732e43616c6c6f7574506c616365686f6c6465724669656c64456e756d" .
            "2e43616c6c6f7574506c616365686f6c6465724669656c644800128a010a" .
            "18737472756374757265645f736e69707065745f6669656c641809200128" .
            "0e32662e676f6f676c652e6164732e676f6f676c656164732e76302e656e" .
            "756d732e53747275637475726564536e6970706574506c616365686f6c64" .
            "65724669656c64456e756d2e53747275637475726564536e697070657450" .
            "6c616365686f6c6465724669656c644800126b0a0d6d6573736167655f66" .
            "69656c64180a2001280e32522e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76302e656e756d732e4d657373616765506c616365686f6c6465" .
            "724669656c64456e756d2e4d657373616765506c616365686f6c64657246" .
            "69656c64480012650a0b70726963655f6669656c64180b2001280e324e2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76302e656e756d732e" .
            "5072696365506c616365686f6c6465724669656c64456e756d2e50726963" .
            "65506c616365686f6c6465724669656c64480012710a0f70726f6d6f7469" .
            "6f6e5f6669656c64180c2001280e32562e676f6f676c652e6164732e676f" .
            "6f676c656164732e76302e656e756d732e50726f6d6f74696f6e506c6163" .
            "65686f6c6465724669656c64456e756d2e50726f6d6f74696f6e506c6163" .
            "65686f6c6465724669656c644800127b0a1361645f637573746f6d697a65" .
            "725f6669656c64180d2001280e325c2e676f6f676c652e6164732e676f6f" .
            "676c656164732e76302e656e756d732e4164437573746f6d697a6572506c" .
            "616365686f6c6465724669656c64456e756d2e4164437573746f6d697a65" .
            "72506c616365686f6c6465724669656c64480012710a0f65647563617469" .
            "6f6e5f6669656c6418102001280e32562e676f6f676c652e6164732e676f" .
            "6f676c656164732e76302e656e756d732e456475636174696f6e506c6163" .
            "65686f6c6465724669656c64456e756d2e456475636174696f6e506c6163" .
            "65686f6c6465724669656c64480012680a0c666c696768745f6669656c64" .
            "18112001280e32502e676f6f676c652e6164732e676f6f676c656164732e" .
            "76302e656e756d732e466c69676874506c616365686f6c6465724669656c" .
            "64456e756d2e466c69676874506c616365686f6c6465724669656c644800" .
            "12680a0c637573746f6d5f6669656c6418122001280e32502e676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e656e756d732e437573746f" .
            "6d506c616365686f6c6465724669656c64456e756d2e437573746f6d506c" .
            "616365686f6c6465724669656c64480012650a0b686f74656c5f6669656c" .
            "6418132001280e324e2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76302e656e756d732e486f74656c506c616365686f6c6465724669656c" .
            "64456e756d2e486f74656c506c616365686f6c6465724669656c64480012" .
            "750a117265616c5f6573746174655f6669656c6418142001280e32582e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76302e656e756d732e52" .
            "65616c457374617465506c616365686f6c6465724669656c64456e756d2e" .
            "5265616c457374617465506c616365686f6c6465724669656c6448001268" .
            "0a0c74726176656c5f6669656c6418152001280e32502e676f6f676c652e" .
            "6164732e676f6f676c656164732e76302e656e756d732e54726176656c50" .
            "6c616365686f6c6465724669656c64456e756d2e54726176656c506c6163" .
            "65686f6c6465724669656c64480012650a0b6c6f63616c5f6669656c6418" .
            "162001280e324e2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "302e656e756d732e4c6f63616c506c616365686f6c6465724669656c6445" .
            "6e756d2e4c6f63616c506c616365686f6c6465724669656c644800125f0a" .
            "096a6f625f6669656c6418172001280e324a2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76302e656e756d732e4a6f62506c616365686f6c" .
            "6465724669656c64456e756d2e4a6f62506c616365686f6c646572466965" .
            "6c64480042070a056669656c6442d5010a25636f6d2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e7265736f75726365734210466565" .
            "644d617070696e6750726f746f50015a4a676f6f676c652e676f6c616e67" .
            "2e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f67" .
            "6f6f676c656164732f76302f7265736f75726365733b7265736f75726365" .
            "73a20203474141aa0221476f6f676c652e4164732e476f6f676c65416473" .
            "2e56302e5265736f7572636573ca0221476f6f676c655c4164735c476f6f" .
            "676c654164735c56305c5265736f7572636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
