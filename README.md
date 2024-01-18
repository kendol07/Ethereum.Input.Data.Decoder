# Ethereum input Data Decoder - Not Need ABI.

## Description
This repository provides support for digital assets on Binance Smart Chain (BNB/BEP20), Ethereum (ERC20), Polygon, and other Ethereum-based networks.

## Instalation
```bash
git clone https://github.com/Fenguoz/bsc-php.git
cd bsc-php
composer install


Example:

require  __DIR__."/vendor/autoload.php";


//$inputData='0xa9059cbb0000000000000000000000006abdd7056b400ce5d98cbf718004fc1f5d00a0a800000000000000000000000000000000000000000000000000000000065bc415';

$inputData='0x1a1da075000000000000000000000000000000000000000000000000000000000000004000000000000000000000000000000000000000000000000000000000000156940000000000000000000000000000000000000000000000000000000000000017000000000000000000000000077369d4b3dd369a910f57f9c62b810dcd7123aa000000000000000000000000000000000000000000000000000556c7d1541df00000000000000000000000007e17c7f7076fa7a81b3226e80cde54b4a86f26400000000000000000000000000000000000000000000000000005626932e7435800000000000000000000000069736de4e9aec0035727f300b7c0cf869d9124f700000000000000000000000000000000000000000000000000079a7480841c00000000000000000000000000512bd78613fdbe72cb49ac9758b1adb783eed7a0000000000000000000000000000000000000000000000000000ad44477139648000000000000000000000000ccb4711d4221c3955f2234f7413665d6b308fc9d000000000000000000000000000000000000000000000000001686b95291e80000000000000000000000000031309fbea747e166e6f0b18b4b41fd8388221466000000000000000000000000000000000000000000000000001d376e055510000000000000000000000000002a2f89ae4bb3aef5a7132f5612039fec9c1c941a000000000000000000000000000000000000000000000000001ea3a0b9494000000000000000000000000000a48d86ce61cc8421ba462b52049969862557f21300000000000000000000000000000000000000000000000000247da36b9a5000000000000000000000000000acb33e3248a17f0dd7777037ca57bdfbe5540d2e0000000000000000000000000000000000000000000000000026e1097e01b000000000000000000000000000b5f00ef48116ed84aa6fa73be3a72589b48c79fc000000000000000000000000000000000000000000000000002b2da4d6c9e4000000000000000000000000002a13d51f91beab5eb8203c505de740068fb6d0b60000000000000000000000000000000000000000000000000037bacc3850cc00000000000000000000000000d3ff1569e9bb812036ec2314a3576223138423bb000000000000000000000000000000000000000000000000003acfebba5ae000000000000000000000000000095566ee5915c1ee98d108bf31a338e24a930b2c00000000000000000000000000000000000000000000000000414445c8e3d800000000000000000000000000e6e6970a14185600028e63a32b8b6a00975d092f00000000000000000000000000000000000000000000000000555919b704b80000000000000000000000000034f961d331a7ddab0dabbf33e5b787de4de09ae50000000000000000000000000000000000000000000000000064454994a7800000000000000000000000000071193eb74b6c4f92b2ea0d308812f12f872bf4740000000000000000000000000000000000000000000000000064c5537a8bb800000000000000000000000000060278f01c706ee115729013800cb5f2fcb4c3f80000000000000000000000000000000000000000000000000080234389c2f400000000000000000000000000709de2f17af168df75d03205ff9be6210220775000000000000000000000000000000000000000000000000000d1356a1ce37000000000000000000000000000c0e05b480950f785f9c2f1336701e4bd794e89c200000000000000000000000000000000000000000000000001ad36f4ca21bc00000000000000000000000000a073f2c8765cead0e7834877ac1742e85f8bdfb200000000000000000000000000000000000000000000000001b5bdf18e9d5400000000000000000000000000598c8e6d359453aac049784c5e7aa713afb6835300000000000000000000000000000000000000000000000002cd27231919cc00000000000000000000000000d56f996861b9d391af84a7ee12268814dfac15b100000000000000000000000000000000000000000000000002dd88fd6f0ae800000000000000000000000000eae7380dd4cef6fbd1144f49e4d1e6964258a4f400000000000000000000000000000000000000000000002ec883f35cc8797000';

require 'decoder.php';
$result= function DecodificarDataInput($inputData);
echo $result;


Example 1:
{
    "direccion": "0x123...",
    "valor": "100"
}

//Example 2

{
    "direccion": "0x123...",
    "contrato": "0x654...",
    "valor": "100" //wei
}
