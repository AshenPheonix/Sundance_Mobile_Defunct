var fritPriceCodes = {
    'A': {
        'Fine': ['1/4 lb -- $4.95', '1 lb -- $11.66', '5 lbs -- $39.50'],
        'Medium': ['1/4 lb -- $4.95', '1 lb -- $11.66', '5 lbs -- $39.50'],
        'Coarse': ['1/4 lb -- $4.95', '1 lb -- $11.66', '5 lbs -- $39.50'],
        'Powder': ['1/4 lb -- $6.69', '1 lb -- $16.50', '5 lbs -- $64.75']
    },
    'B': {
        'Fine': ['1/4 -- $4.95', '1 lb -- $13.25', '5 lbs -- $48.50'],
        'Medium': ['1/4 -- $4.95', '1 lb -- $13.25', '5 lbs -- $48.50'],
        'Coarse': ['1/4 -- $4.95', '1 lb -- $13.25', '5 lbs -- $48.50'],
        'Powder': ['1/4 lb -- $7.45', '1 lb -- $18.75', '5 lbs -- $75.85']
    },
    'C': {
        'Fine': ['1/4 -- $5.69', '1 lb -- $14.35', '5 lbs -- $53.75'],
        'Medium': ['1/4 -- $5.69', '1 lb -- $14.35', '5 lbs -- $53.75'],
        'Coarse': ['1/4 -- $5.69', '1 lb -- $14.35', '5 lbs -- $53.75'],
        'Powder': ['1/4 lb -- $6.69', '1 lb -- $17.60', '5 lbs -- $70.00']
    },
    'D': {
        'Fine': ['1/4 lb -- $6.45', '1 lb -- $15.50', '5 lbs -- $59.50'],
        'Medium': ['1/4 lb -- $6.45', '1 lb -- $15.50', '5 lbs -- $59.50'],
        'Coarse': ['1/4 lb -- $6.45', '1 lb -- $15.50', '5 lbs -- $59.50'],
        'Powder': ['1/4 lb -- $7.45', '1 lb -- $18.75', '5 lbs -- $75.85']
    },
    'E': {
        'Fine': ['1/4 lb -- $6.95', '1 lb -- $17.25', '5 lbs -- $63.48'],
        'Medium': ['1/4 lb -- $6.95', '1 lb -- $17.25', '5 lbs -- $63.48'],
        'Coarse': ['1/4 lb -- $6.95', '1 lb -- $17.25', '5 lbs -- $63.48'],
        'Powder': ['1/4 lb -- $7.95', '1 lb -- $20.00', '5 lbs -- $78.48']
    },
    'F': {
        'Fine': ['1/4 lb -- $8.95', '1 lb -- $23.50', '5 lbs -- $84.92'],
        'Medium': ['1/4 lb -- $8.95', '1 lb -- $23.50', '5 lbs -- $84.92'],
        'Coarse': ['1/4 lb -- $8.95', '1 lb -- $23.50', '5 lbs -- $84.92'],
        'Powder': ['1/4 lb -- $9.95', '1 lb -- $26.90', '5 lbs -- $98.50']
    },
    'G': {
        'Fine': ['1/4 lb -- $12.45', '1 lb -- $33.90', '5 lbs -- $116.50'],
        'Medium': ['1/4 lb -- $12.45', '1 lb -- $33.90', '5 lbs -- $116.50'],
        'Coarse': ['1/4 lb -- $12.45', '1 lb -- $33.90', '5 lbs -- $116.50'],
        'Powder': ['1/4 lb -- $13.45', '1 lb -- $37.00', '5 lbs -- $129.00']
    }
};



var opaque = [
    new Frit('white.jpg', '0009', 'Reactive Cloud Opal', 'D', {
        'Fine': [{
            pid: 'de269921813422eeb8dcbcfea1330890',
            printed: '1/4 lb -- $6.45'
        }, {
            pid: '42777ffe070640c6e44740fdd7538c92',
            printed: '1 lb -- $15.50'
        }, {
            pid: 'd8b9ed00cff0140b07f6cb9e77c5b841',
            printed: '5 lb -- $59.50'
        }],
        'Medium': [{
            pid: '40ca912a6e762e77b022ab6562e1d005',
            printed: '1/4 lb -- $6.45'
        }, {
            pid: '04bfc077bf4f8973805b4b52f61df01a',
            printed: '1 lb -- $15.50'
        }, {
            pid: '449f808274701241241f8d99e066ea76',
            printed: '5 lb -- $59.50'
        }],
        'Coarse': [{
            pid: '0ab59d75713943bc77010dacc1627442',
            printed: '1/4 lb -- $6.45'
        }, {
            pid: 'd93a0e5b968f27cc9ea15ae3e3f30b02',
            printed: '1 lb -- $15.50'
        }, {
            pid: '31b535dd79157695172dde1a794abf5a',
            printed: '5 lb -- $59.50'
        }],
        'Powder': [{
            pid: '47df91fa2c13bb8e8e6b33ef5c44aeff',
            printed: '1/4 lb -- $7.45'
        }, {
            pid: '6f9b3ef92e0b35e774a899e8af9f0bef',
            printed: '1 lb -- $18.75'
        }, {
            pid: 'b3f7dbb796be1ec8cfa6d9365df885d3',
            printed: '5 lb -- $75.85'
        }]
    }), new Frit('white.jpg', '0013', 'Opaque White', 'D', {
        'Fine': [{
            pid: 'cb03bfe8673e450287bb2adee84fad9e',
            printed: '1/4 lb -- $6.45'
        }, {
            pid: '6985d8022d9fac4e94a155d398d445a6',
            printed: '1 lb -- $15.50'
        }, {
            pid: '1aa28969ad63dde2b6cce6bef3238d01',
            printed: '5 lbs -- $59.50'
        }],
        'Medium': [{
            pid: 'df7a4d741e254765a4631cbee1fb89ff',
            printed: '1/4 lb -- $6.45'
        }, {
            pid: '808d7ad39840eb76c8a3748b0f46ae05',
            printed: '1 lb -- $15.50'
        }, {
            pid: 'cf81249361eebc04fb86853a1a0358bb',
            printed: '5 lbs -- $59.50'
        }],
        "Coarse": [{
            pid: '825b349fafd860326388bec822eea437',
            printed: '1/4 lb -- $6.45'
        }, {
            pid: '192afb2b2685b6dccbfb505e6800f45c',
            printed: '1 lb -- $15.50'
        }, {
            pid: '96dc739e32bd04ae2e75bfa7700e0494',
            printed: '5 lbs -- $59.90'
        }],
        'Powder': [{
            pid: '658cf8599883a92133e4de8c7889d927',
            printed: '1/4 lb -- $7.45'
        }, {
            pid: 'eacd3dc6fff49cc060477be03b9ab27d',
            printed: '1 lb -- $18.75'
        }, {
            pid: 'bee83331002e3637caa357347319298b',
            printed: '5 lbs -- $75.85'
        }]
    }), new Frit('0024.jpg', '0024', 'Tomato Red', 'C', {
        "Fine": [{
            pid: "b03ab3af616cc25ccfcf3ecb44bb2c8c",
            printed: "1/4 lb -- $5.69"
        }, {
            pid: "22715dac1a2e68c7d34a666207684808",
            printed: "1 lb -- $14.35"
        }, {
            pid: "555fc6949ce3ff7a313938b4950e7001",
            printed: "5 lbs -- $53.75"
        }],
        'Medium': [{
            pid: "8b34bb7e8131479f55c32459f1738125",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "394ef3153d6645ae9afa97f408635abe",
            printed: '1 lb -- $14.35'
        }, {
            pid: "8b913feba5c5085db30ce3977c643099",
            printed: '5 lbs -- $53.75'
        }],
        'Coarse': [{
            pid: "a5e3fa8498bdfafc09e2b9a873285e35",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "0ce700e37d9f55bd78506df8377fab35",
            printed: '1 lb -- $14.35'
        }, {
            pid: "76c4584b9e7e70c4b917ea3a104c537a",
            printed: '5 lbs -- $53.75'
        }],
        'Powder': [{
            pid: "645abdb9728d18ad14ed36594dad34fa",
            printed: '1/4 lb -- $6.69'
        }, {
            pid: "79127680da5a221fe0281828e72dac11",
            printed: '1 lb -- $17.60'
        }, {
            pid: "7f4838aa839b92d6b66ca5ffa9536d17",
            printed: '5 lbs -- $70.00'
        }]
    }), new Frit('0025.jpg', '0025', 'Tangerine Orange', 'C', {
        'Fine': [{
            pid: "46b299b77546e2512c9dba7bbbae1e5b",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "80213dba834b4a02c4abd097dd45f57e",
            printed: '1 lb -- $14.35'
        }, {
            pid: "bc057bb6c49be3e770ee1a3484c00149",
            printed: '5 lbs -- $53.75'
        }],
        'Medium': [{
            pid: "5cb03d4e4343a486d172c4f2aac81494",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "349ba3982ca4bc17234813998a601306",
            printed: '1 lb -- $14.35'
        }, {
            pid: "5df2b81742a8fb9d02cdfd8085541ea5",
            printed: '5 lbs -- $53.75'
        }],
        'Coarse': [{
            pid: "b4d09d75e8700963d0a6a605f9d3d9c6",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "ab23a7299fa792dfe2c79dcc3d65da2e",
            printed: '1 lb -- $14.35'
        }, {
            pid: "54cf34cf9b459b47072301cb6e06c652",
            printed: '5 lbs -- $53.75'
        }],
        'Powder': [{
            pid: "e0f637b60434142b15ba6a16f7da99e3",
            printed: '1/4 lb -- $6.69'
        }, {
            pid: "9b8b317673a05bf9c0534540430feccc",
            printed: '1 lb -- $17.60'
        }, {
            pid: "3a15db0f7d422707fee1125d66952ae5",
            printed: '5 lbs -- $70.00'
        }]
    }), new Frit('0034.jpg', '0034', 'Peach Cream', 'C', {
        'Fine': [{
            pid: "93df9b1c206f9840f8bbcc99699cb49a",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "dbcb60a086101c4d67cb7dabd1a94c16",
            printed: '1 lb -- $14.35'
        }, {
            pid: "ac52e6693f7b70c5f95790e7a6235067",
            printed: '5 lbs -- $53.75'
        }],
        'Medium': [{
            pid: "e5e4e4b91ac193a2ef33d80df395aa0f",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "90afd98bb71b47be82f4bf3ade66f9b7",
            printed: '1 lb -- $14.35'
        }, {
            pid: "fbb64cb025f750d721266b35b0d97410",
            printed: '5 lbs -- $53.75'
        }],
        'Coarse': [{
            pid: "870aa0db194880a65024ff3966707132",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "26c4b458f39cb940363981798f869feb",
            printed: '1 lb -- $14.35'
        }, {
            pid: "744012f0f8057e3af7d5369783afa182",
            printed: '5 lbs -- $53.70'
        }],
        'Powder': [{
            pid: "937620191dab089267ddc18ec6ade223",
            printed: '1/4 lb -- $6.69'
        }, {
            pid: "15766b5ce0048347705b5a8e40dfb26c",
            printed: '1 lb -- $17.60'
        }, {
            pid: "bea755740dd4fc191afd38b2729d3ae3",
            printed: '5 lbs -- $70.00'
        }]
    }), new Frit('0100.jpg', '0100', 'Black', 'C', {
        'Fine': [{
            pid: "b98ae063e0b9661178a25a158b3a90c7",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "e0d8b3a1931b8c4600d0294af57fd253",
            printed: '1 lb -- $14.35'
        }, {
            pid: "ca200efbece4d47026c633e64fb13001",
            printed: '5 lbs -- $53.75'
        }],
        'Medium': [{
            pid: "99960ec72033c18a3ed59f262aafd25d",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "be18abbf1f868cd161c4fe2ab5628c7a",
            printed: '1 lb -- $14.35'
        }, {
            pid: "cc444fa435bb5bbe38801268897e96b0",
            printed: '5 lbs -- $53.75'
        }],
        'Coarse': [{
            pid: "b40774cf804b63a8935f9189f1208817",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "085b2872ecaff2522766ea8e5a5a5402",
            printed: '1 lb -- $14.35'
        }, {
            pid: "77c9d3a007c731a87c17cb18f24e75d8",
            printed: '5 lbs -- $53.75'
        }],
        'Powder': [{
            pid: "7e955dc3cf3afbafe1bb74c136bd75c8",
            printed: '1/4 lb -- $6.69'
        }, {
            pid: "17966b059e71a1e8d4815127373d0db6",
            printed: '1 lb -- $17.60'
        }, {
            pid: "142b9a409b5e1f30adb3f72232ae3267",
            printed: '5 lbs -- $70.00'
        }]
    }), new Frit('0101.jpg', '0101', 'Stiff Black', 'C', {
        'Fine': [{
            pid: "88815a482b91480eb3dc8665c40268d9",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "294e63808d02cb1c1fe48923e186eb17",
            printed: '1 lb -- $14.35'
        }, {
            pid: "994d99f0b167102e19164a9c2a750df5",
            printed: '5 lbs -- $53.75'
        }],
        'Medium': [{
            pid: "02847579391ed0dc6fc27ad19063a674",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "91fa1f334e3ae5917c4b394e636dc925",
            printed: '1 lb -- $14.35'
        }, {
            pid: "9a87f44469aa8afeb954018a5aa9f885",
            printed: '5 lbs -- $53.75'
        }],
        'Coarse': [{
            pid: "90e61545dc04bdd99c7a7a50437b1894",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "7e9c0b896844c1015759be878c0587d1",
            printed: '1 lb -- $14.35'
        }, {
            pid: "4130b6860859b4a420c9328bc9505e74",
            printed: '5 lbs -- $53.75'
        }],
        'Powder': [{
            pid: "d96134790a6318f6dc505c72e106cb2e",
            printed: '1/4 lb -- $6.69'
        }, {
            pid: "c5f3cd5c72a7dab003bb586492e1d4c9",
            printed: '1 lb -- $17.60'
        }, {
            pid: "3bd26e63b4af32f1d138ffeb3930c3de",
            printed: '5 lbs -- $70.00'
        }]
    }), new Frit('0108.jpg', '0108', 'Powder Blue', 'B', {
        'Fine': [{
            pid: "3762c9a8bfb1b504d97a434d7587112e",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "8af5acf447c22ca68da5f3df8d2312b6",
            printed: '1 lb -- $13.25'
        }, {
            pid: "51729fca47d0aeb092291f7a89b6f7ee",
            printed: '5 lbs -- $48.50'
        }],
        "Medium": [{
            pid: "c03930c07866fea138f6eefaeba2530d",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "144fa3fc90fa50dad04630fdbb1b9915",
            printed: '1 lb -- $13.25'
        }, {
            pid: "a233f00f5249765ba97769f56d61d13f",
            printed: '5 lbs -- $48.50'
        }],
        "Coarse": [{
            pid: "d16f553be93ef662ee491b4244fc49bb",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "bf2c83e24198da2ed2d064414aebd3d4",
            printed: '1 lb -- $13.25'
        }, {
            pid: "14c2ffbdcfde5e9107e1ca60deadeb9f",
            printed: '5 lbs -- $48.50'
        }],
        'Powder': [{
            pid: "a2a5d85f4b66f6dabcc2fc1c9c466880",
            printed: '1/4 lb -- $6.69'
        }, {
            pid: "a445eb6bcd2febb8d547f8526acfdeb1",
            printed: '1 lb -- $16.50'
        }, {
            pid: "7285c21df9d6aac577208a8389cf0d00",
            printed: '5 lbs -- $64.75'
        }]
    }), new Frit('0112.jpg', '0112', 'Mint Green', 'B', {
        'Fine': [{
            pid: "be7772e89aca5a2adc6f9f181bd064a4",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "2c67b6bb60efc31be6cd18862eff96ac",
            printed: '1 lb -- $13.25'
        }, {
            pid: "1f20330aad492d2b9b697f7bcd350e40",
            printed: '5 lbs -- $48.50'
        }],
        'Medium': [{
            pid: "17e7fa59cc98f81eb3808636fef8467a",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "53d2d337989f08867eef49e5978b988c",
            printed: '1 lb -- $13.25'
        }, {
            pid: "bd83d86ff87fc296e8410dee4cc5350b",
            printed: '5 lbs -- $48.50'
        }],
        'Coarse': [{
            pid: "c081f13aef3ef011be2714eafc2b7c74",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "6f826de505b54a850084e00e99424d63",
            printed: '1 lb -- $13.25'
        }, {
            pid: "e7ac7c1e1a1f6527d413c84c35c3d072",
            printed: '5 lbs -- $48.50'
        }],
        'Powder': [{
            pid: "c32d81d92206db427eec88317e6bc4db",
            printed: '1/4 lb -- $6.69'
        }, {
            pid: "40cab2868e5abf761e8e5d6dc2004e1c",
            printed: '1 lb -- $16.50'
        }, {
            pid: "c96cc79198a86557bf9b8d768f14f172",
            printed: '5 lbs -- $64.75'
        }]
    }), new Frit('0113.jpg', '0113', 'White', 'B', {
        'Fine': [{
            pid: "62dd0cd06bf088a82ebcd6447cd23be3",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "4f8d3dc14eef616d47bc6a1a69b4614f",
            printed: '1 lb -- $13.25'
        }, {
            pid: "d6eb4ddf99f80181afe76b136b0f27c6",
            printed: '5 lbs -- $48.50'
        }],
        'Medium': [{
            pid: "5df1fe47372ee99e00ef7999ea3919a9",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "99826c1abf03b1ffd961d696d9088441",
            printed: '1 lb -- $13.25'
        }, {
            pid: "9ffa6ec9bd6c0d26e68909f003624d48",
            printed: '5 lbs -- $48.50'
        }],
        'Coarse': [{
            pid: "aae181c1317f4def97a988dffaa05589",
            printed: '1/4 lb -- $5.69'
        }, {
            pid: "20133ae202414e15c6c40582f5334568",
            printed: '1 lb -- $13.25'
        }, {
            pid: "5b0c438261cf36deb13bc938b728374c",
            printed: '5 lbs -- $48.50'
        }],
        'Powder': [{
            pid: "ec2ae96b34f3305587f79bbcba67adb1",
            printed: '1/4 lb -- $6.69'
        }, {
            pid: "7f3c56807b6ddda314e71093abb47c17",
            printed: '1 lb -- $16.50'
        }, {
            pid: "8b9ec07159323ba6b2efa8d7e5040e58",
            printed: '5 lbs -- $64.75'
        }]
    }), new Frit('0114.jpg', '0114', 'Cobalt Blue', 'B', {
        'Fine': [{
            pid: "e29110ba05a9dd7fd642b29d7aa4f5de"
        }, {
            pid: "cf2288cb34170c60a43c5000a7687c8a"
        }, {
            pid: "bc0adb63ef316916f091f9941bc58a73"
        }],
        'Medium': [{
            pid: "0b849d632a3cd4453bf9341b167e93ff"
        }, {
            pid: "3828ac8fff44364c5083551a911cf749"
        }, {
            pid: "f45e933f4188548312bf9f9020ab22c5"
        }],
        'Coarse': [{
            pid: "1a6a001385d6b7397b3b6fdadb096985"
        }, {
            pid: "a32bbf9e7b873fc331f021b601a9bcc7"
        }, {
            pid: "89b931202bf7bedc7239bafa8c0f3b94"
        }],
        'Powder': [{
            pid: "a9a684ec722b71350a0f313e661c66d1"
        }, {
            pid: "12be8249fcd8162ecd2ca51bb9ead291"
        }, {
            pid: "03cfe96305a9c7fecd7c657acfe9366d"
        }]
    }), new Frit('0116.jpg', '0116', 'Turquoise Blue', 'B', {
        'Fine': [{
            pid: "5d6207c8ae57689d30d019f10175f2a5"
        }, {
            pid: "8e627919586412673abf9d2ddff31f83"
        }, {
            pid: "f7f02a64c4b80a68b1332fd309ba129b"
        }],
        'Medium': [{
            pid: "7c935bf9bcdd5b6b56ce1171c8c59e4a"
        }, {
            pid: "ece72bdbce6552ad883ca5e35bbe38ca"
        }, {
            pid: "1118d9b8cd263ad9cfe669b05dc030a5"
        }],
        'Coarse': [{
            pid: "aa03b0dbda941f6d04e0b64aa45edc90"
        }, {
            pid: "7ab034403e206506f37a37fa52de03bc"
        }, {
            pid: "5d5bfd716f200cf78bcb17eeff6a3f09"
        }],
        'Powder': [{
            pid: "e2b80216133dde90f05a400c75c69fc7"
        }, {
            pid: "dc58666be1c4d6dc3bee526fcbcafd19"
        }, {
            pid: "1745b71a9191c5030a7ee1cd098ecbac"
        }]
    }), new Frit('0118.jpg', '0118', 'Periwinkle', 'C', {
        'Fine': [{
            pid: "a8ae5f45a61e45c589a8b1b3998ea4c8"
        }, {
            pid: "780f0ce751a2413aa1ce2278af2f9b1a"
        }, {
            pid: "ed12d3f823cc4b6fa203dc2559da85a0"
        }],
        'Medium': [{
            pid: "25188e6dcf954979bd192dd3a3317766"
        }, {
            pid: "f25277883d9e4812ae744b2615446407"
        }, {
            pid: "63335a0116734baebb0549b175af0306"
        }],
        'Coarse': [{
            pid: "75579add8d464eeb859decb04f6a6f45"
        }, {
            pid: "0f50f91af9554301bb4cac3b204939d8"
        }, {
            pid: "c1224ead82be4aeb8370da928c3ce139"
        }],
        'Powder': [{
            pid: "c7fe5a85b752466888031ff6398efff3"
        }, {
            pid: "4e5f585d7b0a45ca9ef6aca730876eb5"
        }, {
            pid: "10f4e79bb78b4676936143b00fe9dd23"
        }]
    }), new Frit('0119.jpg', '0119', 'Mink', 'D', {
        'Fine': [{
            pid: "bcee5fe5bc384ee6bc58d57d639ef768"
        }, {
            pid: "9155bee85034442988e30c4706f52f2c"
        }, {
            pid: "482ba0c7b2aa474dbf22c982660a24ab"
        }],
        'Medium': [{
            pid: "4217c13042ee42e896c02449af59a80d"
        }, {
            pid: "5e984bd3da9a458aab4eddb5b746cd02"
        }, {
            pid: "5b351f4c402640589c9cb252264b881a"
        }],
        'Coarse': [{
            pid: "2cd061a3a46445a18b0170aba3723858"
        }, {
            pid: "ee793c6e7ed1450091e8f13eabe4edc5"
        }, {
            pid: "636715194637418cba1f53736ab9b8fa"
        }],
        'Powder': [{
            pid: "b50c86199bd84dd4bfa93a56cdfb4830"
        }, {
            pid: "db7cb7d1a8ee4886af22af490b5e6e0d"
        }, {
            pid: "6a9492a2bf554229994a9167ba257756"
        }]
    }), new Frit('0120.jpg', '0120', 'Canary Yellow', 'C', {
        Fine: [{
            pid: "5a9baf22b44d7e7d30de54a8676c7f1d"
        }, {
            pid: "1741aecc872384538e23f4e430420deb"
        }, {
            pid: "b41f2a3ce81e63eac20e5fb9ba379944"
        }],
        Medium: [{
            pid: "4d2b596fcea8ab6b8da988ccb81d7d1b"
        }, {
            pid: "18c4270ecbebcaeb4020030452777dfb"
        }, {
            pid: "8443b4747b7e358a6b535fb258948be9"
        }],
        Coarse: [{
            pid: "60423c84044ce320d2048eb84a9b85bb"
        }, {
            pid: "106a74eb570d64db4d41798f1a45ce52"
        }, {
            pid: "637e34f4f34c0f0c193bb7b0d65b49ba"
        }],
        Powder: [{
            pid: "479f92f731a24c286abe5643361f73d2"
        }, {
            pid: "84aeb4d849949ee5ec2bb37d48d82ede"
        }, {
            pid: "f7064621ade80e3c41bcb3cf039cbf1b"
        }]
    }), new Frit('0124.jpg', '0124', 'Red', 'C', {
        Fine: [{
            pid: "94c3222bec0e0ffefa1d1a776623020d"
        }, {
            pid: "6aa65a190fcb086fec2779ac154c843a"
        }, {
            pid: "9662801ed1194b04f557b8d40e1faffd"
        }],
        Medium: [{
            pid: "3e87ea2915e97ca33258a4ed6a830a39"
        }, {
            pid: "efd17670db677774648ba8bdb5ecf1cf"
        }, {
            pid: "9562268c425515ff745466b9543f0104"
        }],
        Coarse: [{
            pid: "17df67da3101e881c1db8075b258eb90"
        }, {
            pid: "a2c4b6e739efc296b224dc1220f4c807"
        }, {
            pid: "55ad5acdad345465673a90f7a62abfff"
        }],
        Powder: [{
            pid: "6cf3587f1712968260e504b5782661fc"
        }, {
            pid: "0ea30dadfe93b726cce4cab2f314e505"
        }, {
            pid: "73144ed8dd037de8ec41ae5f730343ff"
        }]
    }), new Frit('0125.jpg', '0125', 'Orange', 'C', {
        Fine: [{
            pid: "e6b56311a8cb9791ba967943614eadc8"
        }, {
            pid: "f1f04c52fff8ab6e174060d91d4a58ed"
        }, {
            pid: "914c6c4b9537805db9dc169901e6bac6"
        }],
        Medium: [{
            pid: "75dd3785cfdb3d32b867cfc78d714426"
        }, {
            pid: "ed06352fa23de3dabfc8b2a45b3a88d4"
        }, {
            pid: "a9ff1f987f16db02ec09c79a9a39fd26"
        }],
        Coarse: [{
            pid: "ddeef6b6e93517fff86285d0cb37aa18"
        }, {
            pid: "a5a5fb46113b2ce5b4cd67894df01d90"
        }, {
            pid: "3cac4742093e3bb8624fe74515d4905e"
        }],
        Powder: [{
            pid: "694a16544daf5e5680a7965eb6832fc1"
        }, {
            pid: "94fe81c637576a765549ec040b843f97"
        }, {
            pid: "a4a0587ebae3fe2b4afe41fc02c27fb2"
        }]
    }), new Frit('0126.jpg', '0126', 'Spring Green', 'C', {
        Fine: [{
            pid: "51f0f5f18823b287a46a62d679421540"
        }, {
            pid: "1cffbe32c852a552b71bee54284d7dc1"
        }, {
            pid: "53e062fde25916647a6473750696ef7a"
        }],
        Medium: [{
            pid: "06e076c05da9cfe81cfffe7eceebb2ac"
        }, {
            pid: "f80d39d62670a53956e890c5b560db75"
        }, {
            pid: "b9bc4fb95f5235df8ce36c1bf4e0b60d"
        }],
        Coarse: [{
            pid: "1bffade368078f2487a99511fe2a0553"
        }, {
            pid: "2c118f1aff141343caa7cddec8033ee0"
        }, {
            pid: "999a64d65f510b33906a11ae336f97e5"
        }],
        Powder: [{
            pid: "517eb8d0f68590911231626a7e38c1f6"
        }, {
            pid: "ca7f320ab34bf7a3dfae52fc1f8ad53b"
        }, {
            pid: "1c5079054c735506d9eb50c276706ba2"
        }]
    }), new Frit('0132.jpg', '0132', 'Driftwood Gray', 'C', {
        Fine: [{
            pid: "886a7aa2bcc256310eea71f57ff794f8"
        }, {
            pid: "d69aa8e13fc6deec5faccd0bcc2e55bb"
        }, {
            pid: "a8118b3d6a4146cdcb22ad73f4d5ba02"
        }],
        Medium: [{
            pid: "6539319b0ff2f54e400ad04ddbb2f9b1"
        }, {
            pid: "bd5f3100d05d1aca79c459048c5c50ad"
        }, {
            pid: "cf7c707b9367ed9ab190e0f031c5a371"
        }],
        Coarse: [{
            pid: "ff69e59e08b251598dbe63cd07d1b40b"
        }, {
            pid: "6cb64fd24df56a0b7d3a1f2dabe24ee8"
        }, {
            pid: "b2006432a743d8b8d6fcb568ce16ac12"
        }],
        Powder: [{
            pid: "045f4b6682fb1fa41e22e833d13dd2c1"
        }, {
            pid: "a058e56c5c8938a0141aaf3c1f2f57eb"
        }, {
            pid: "9017f121da76e204404d3652ce43f449"
        }]
    }), new Frit('0136.jpg', '0136', 'Deco Gray', 'B', {
        Fine: [{
            pid: "862f91f644c707af43a7c3dabb2c75e3"
        }, {
            pid: "16a49b59dbf84fe32c91d1ca86386443"
        }, {
            pid: "044e961d5984d42242df7859298da1ca"
        }],
        Medium: [{
            pid: "791915bc9fe1c7c37091e55271e92959"
        }, {
            pid: "1ddcd5bd7327c1aa66b1aec8ae103d58"
        }, {
            pid: "42daaff50b5bb1fada18d00044dba123"
        }],
        Coarse: [{
            pid: "35dc5488e95a8a69a919fc1f55af5a02"
        }, {
            pid: "fac07615dab0496fb80fd018d8d8a520"
        }, {
            pid: "435f8263333e12bd140f627f2b5941d7"
        }],
        Powder: [{
            pid: "58de0d7ad2de303b0454f4797cfa9838"
        }, {
            pid: "0fe42321535d8323e97416010e810662"
        }, {
            pid: "8b07a50968cbdc4c7d12e6167948eb38"
        }]
    }), new Frit('0137.jpg', '0137', 'French Vanilla', 'B', {
        Fine: [{
            pid: "e9ba010d135c0a92e1c934fb82ffdf51"
        }, {
            pid: "2b2a652ac76a765be1b04c4ba06d6603"
        }, {
            pid: "59bf46982d2da430a75fe419b61c8b73"
        }],
        Medium: [{
            pid: "33a09a51d7f08d141b4323555431f0da"
        }, {
            pid: "2b693d0db4a3734836f3e6efbcdecdea"
        }, {
            pid: "3bf8044f1d37dae63d8e71fd41b0b1ed"
        }],
        Coarse: [{
            pid: "ab39b7f82ff8e5a33d5ecbba6b459b3b"
        }, {
            pid: "bd2a6115c651f6f4031890b39ec90386"
        }, {
            pid: "04c24b9918d794888afac6ea4d9730d7"
        }],
        Powder: [{
            pid: "1cf80c2102df6032c9b1fd5bd12d0a6f"
        }, {
            pid: "b4f8c6e9bb9d52bd66fe573802e43ada"
        }, {
            pid: "20ead9fdbadec9a13c196ecb5c675d96"
        }]
    }), new Frit('0138.jpg', '0138', 'Marzipan Striker', 'D', {
        Fine: [{
            pid: "65330f87dd9c8357b471ddaa64b3ad48"
        }, {
            pid: "98bad14e5ba56cf8d9baa7527783ca32"
        }, {
            pid: "61de679edf2d855ea3579e921cae2aaa"
        }],
        Medium: [{
            pid: "e70522ce5d9e3551455b4292bfaa0d46"
        }, {
            pid: "ef2cefaef00c2d3cc14d8dd1e230e7e4"
        }, {
            pid: "e36603a61e0438c4b033f28a8e174381"
        }],
        Coarse: [{
            pid: "6fc5c0f3df58d2ee908bbda24d81dfca"
        }, {
            pid: "e059a2d61e57ed7f38165cefd788cafe"
        }, {
            pid: "062296183798409556d773c5feb449d6"
        }],
        Powder: [{
            pid: "5ba34d6db4567c35a8c862980e244f7f"
        }, {
            pid: "a2c99b7e02185e01a3b044d25d7d3e97"
        }, {
            pid: "8bfdc67539b5359f7ccc7f77eed5ddb8"
        }]
    }), new Frit('0141.jpg', '0141', 'Dark Forest Green', 'B', {
        Fine: [{
            pid: "38e720b9fd02014b7121ea5b48f75a54"
        }, {
            pid: "adf9df2a17155ddd2c02ee0cab5b0cf4"
        }, {
            pid: "fe7eaf74f66d443ba2ac49b248ec65d1"
        }],
        Medium: [{
            pid: "3f6547b35ad776868a7d0a65e13c2899"
        }, {
            pid: "da426951f2853fded9ebb5569cb8a7bb"
        }, {
            pid: "61e7887eadac3d01861ce607566ed2bb"
        }],
        Coarse: [{
            pid: "52c6822f6cc6c66e539c23f5036a7cd4"
        }, {
            pid: "1215ee80a9bd9d2b318a2c4b7c18d1cc"
        }, {
            pid: "62cc0529cbf5437993f9859363cf6edf"
        }],
        Powder: [{
            pid: "f3591e1782ba77081121db99139d7547"
        }, {
            pid: "6a9e927be264c6a80378739aa3d06c2a"
        }, {
            pid: "f10a19dbcab290fe9b9466d566d9579e"
        }]
    }), new Frit('0142.jpg', '0142', 'Neo-Lavender', 'E', {
        Fine: [{
            pid: "f8f6c49210599e71bc9f535b3a39b1ec"
        }, {
            pid: "e934dfe0337b8a84d8283214d5d366d2"
        }, {
            pid: "9cba63bdf62155677beac3e1f36753c5"
        }],
        Medium: [{
            pid: "755b137929863608054979c0ea278ff1"
        }, {
            pid: "fa28095e3c9e9931aeddfb146d40c4bb"
        }, {
            pid: "ec71ec8c7854de92e4774c6e8441eff7"
        }],
        Coarse: [{
            pid: "5de2aabf52d83a808ebedc5b28b3b0db"
        }, {
            pid: "fd1e8a3b2ec316bff2618cc20f568e74"
        }, {
            pid: "dbb624b9f6d884f842b866c6151e8fc1"
        }],
        Powder: [{
            pid: "cdc99aea67b04cb931a45b1165d2fc42"
        }, {
            pid: "a3cc1c3c569efe47ef26aea3fe1379af"
        }, {
            pid: "8a23c0c5792f2c6358aa80b9b9130c5b"
        }]
    }), new Frit('0144.jpg', '0144', 'Teal Green', 'B', {
        Fine: [{
            pid: "d27790f2b1ae582e4eb32e2cede118ab"
        }, {
            pid: "9d13e8999675195c8254684e05e24be8"
        }, {
            pid: "bd44a5e2c445da71c6aacb14cb458d34"
        }],
        Medium: [{
            pid: "82dab9c786987a4b7ce23d8963b4aba8"
        }, {
            pid: "f1f871eda8a384cb8130b138156ab9e4"
        }, {
            pid: "dbec206321db21366607636b63fdd9f1"
        }],
        Coarse: [{
            pid: "290f27676a7e5e98350ce8dd1a9285e6"
        }, {
            pid: "35a89da3f8b3fecb7d37381216512d66"
        }, {
            pid: "928a6d1778269ff6f46509f494db1df7"
        }],
        Powder: [{
            pid: "25bcfd454fe1b0b26595b1c54e802e7d"
        }, {
            pid: "ae0b02a40e3bfc1300d1e415f8916eb5"
        }, {
            pid: "4984c7bbbe848d97cb3f8c1d5eaeaf84"
        }]
    }), new Frit('0145.jpg', '0145', 'Jade Green', 'B', {
        Fine: [{
            pid: "659b00fc2eb9cf634ec96d189acf2919"
        }, {
            pid: "759972885961d1663e16712c11d80112"
        }, {
            pid: "28bd40394875c60a29be23ea4f1111e7"
        }],
        Medium: [{
            pid: "dfc79f6246de1036f7b8dd6af0342dc4"
        }, {
            pid: "27485eba2008e7ea500aac0b91af1d6b"
        }, {
            pid: "5aee13aac40b1c507a60abc7932a0422"
        }],
        Coarse: [{
            pid: "49bd78fdc0305bf80e9cdbabc26b8f86"
        }, {
            pid: "e07bc9fb133c12a93b1c773b9c484567"
        }, {
            pid: "0664d7866db3e5a983f65a2948bdb8df"
        }],
        Powder: [{
            pid: "2df8fa3fe57dcad01bd27ae0c404b2f2"
        }, {
            pid: "9a83542da094bafb3651be2c8379b696"
        }, {
            pid: "b134dd0f49d85e9111ac718da2470367"
        }]
    }), new Frit('0146.jpg', '0146', 'Steel Blue', 'B', {
        Fine: [{
            pid: "465822772cbbc093a30499aa4b74bfc7"
        }, {
            pid: "fde7b024a7cd6a076774aadb2d472cbd"
        }, {
            pid: "5cc80e1cb72297e62a4e41af47e1322d"
        }],
        Medium: [{
            pid: "246c173e82f95c0dee395aee174a8545"
        }, {
            pid: "9192da13724e43273034a0a174c77982"
        }, {
            pid: "938daa764eddfecad3c906321127124e"
        }],
        Coarse: [{
            pid: "755c7cfab731b3d7c604114dd30216aa"
        }, {
            pid: "74191af250115d2134755ed233be4c0a"
        }, {
            pid: "535484cff0d91e02e9d21de3cec8ec3f"
        }],
        Powder: [{
            pid: "bd611c7a64b5b1dcba0dec845d2d0b6e"
        }, {
            pid: "d0c468b3041b7cef5fd0576c2c73c49c"
        }, {
            pid: "d60c88c9487bdea77ff4d72994aad15a"
        }]
    }), new Frit('0147.jpg', '0147', 'Deep Cobalt Blue', 'C', {
        Fine: [{
            pid: "b495c95362426b4b3b5b0997766b92e8"
        }, {
            pid: "03ebf9f1562c09221f97536cd456ca2b"
        }, {
            pid: "1e14567a4b6e74ffef2d7201d4561e02"
        }],
        Medium: [{
            pid: "8ce030ed594bc8a9e074190c39f229cd"
        }, {
            pid: "0993d0f88e434d4cc7d4f3e6f0f6b1f6"
        }, {
            pid: "468606e293c7144facd2b225fca435ee"
        }],
        Coarse: [{
            pid: "d4a872fec1deeb9566dd739c6e70dc00"
        }, {
            pid: "cbc3d46f33177d0e3806454e2d7a7e8d"
        }, {
            pid: "ef35c119fcea131c8ba9d19136a3422c"
        }],
        Powder: [{
            pid: "afb70b036cee630adfc81e7f8f812795"
        }, {
            pid: "eb54b98f0faefed56a4d8801722595b6"
        }, {
            pid: "ce23403bd5375b9c96a4bb168fad3ad4"
        }]
    }), new Frit('0148.jpg', '0148', 'Indigo Blue', 'C', {
        Fine: [{
            pid: "022e80abf27f45be84724334ff94e1aa"
        }, {
            pid: "cf9b1dc6af554b2f9eefa0a274eccac3"
        }, {
            pid: "08736882056749eba8e4a811df6e54a0"
        }],
        Medium: [{
            pid: "32d06236617342ceb8a3aa95514c54e1"
        }, {
            pid: "ee4a52dee2914389af2a26bb5dee6c43"
        }, {
            pid: "4193dcea59a84012bbd65e0505365e59"
        }],
        Coarse: [{
            pid: "93039109e358427093e8d254749661c8"
        }, {
            pid: "a0268ddf449549508c2db2b0071cf271"
        }, {
            pid: "4ed45529e6b84e1cb53a987fa46afd14"
        }],
        Powder: [{
            pid: "d5df3fb09fb24bc59aed07319cdf0532"
        }, {
            pid: "47d0cc91e2444bf8acddbdfe845fd8da"
        }, {
            pid: "5439a4039934413dbacf6250b8ea1a00"
        }]
    }), new Frit('0164.jpg', '0164', 'Egyptian Blue', 'B', {
        Fine: [{
            pid: "9de0c8685bbe7fb03e1b086c6cef4ec3"
        }, {
            pid: "2900b15a017b917fe44e1cbf34f40194"
        }, {
            pid: "967588bfe002146cb01ff04e77cf64b0"
        }],
        Medium: [{
            pid: "194648123a824ec9d493fb05b7c691cf"
        }, {
            pid: "0175fb046741548de1d1ebc3b7d1ab99"
        }, {
            pid: "5dee383b62423a1c07235723f406939c"
        }],
        Coarse: [{
            pid: "cc6e2c885de073df37aa7e477aa1892b"
        }, {
            pid: "16da68eea565ec7584e1c0455427d29d"
        }, {
            pid: "ead18d3c5a2d57d8439170f22f20fdfa"
        }],
        Powder: [{
            pid: "0fd9adc7bb9dc4915514b2753ecc841b"
        }, {
            pid: "859a92688abb5d32d44ea3e76053f82b"
        }, {
            pid: "7e7b676a71387ea2bddf7e16af87c6fd"
        }]
    }), new Frit('0203.jpg', '0203', 'Woodland Brown', 'C', {
        Fine: [{
            pid: "c539a1b2bfd2a188b1249db297d8d78c"
        }, {
            pid: "8c4ceae99a4f268824bf9f0419f8142a"
        }, {
            pid: "3e86fd0b4a01706d25f99b9ddf38fe6f"
        }],
        Medium: [{
            pid: "451d2aee3fe99352c86f4c8599cc6543"
        }, {
            pid: "a752ad1e9dcd4dc696696bd1fb2ab3d1"
        }, {
            pid: "407e7961c1bbdc254f06089b6da8c2ed"
        }],
        Coarse: [{
            pid: "92c6f122687263f78d4a78523cf253b9"
        }, {
            pid: "ce0a191ca0c644601822798aee3eb27d"
        }, {
            pid: "caaaf83c9bff0acc95c092ccb69b52ff"
        }],
        Powder: [{
            pid: "0de2206ae34e6037d0823fc8a1d2ca73"
        }, {
            pid: "6c097ffd467f0b2fa38521530dc6af1e"
        }, {
            pid: "82d6f70e3585a7ce3f6de29587e18869"
        }]
    }), new Frit('0206.jpg', '0206', 'Elephant Gray', 'C', {
        Fine: [{
            pid: "a863e0e1de1f42329bd72495acffe74b"
        }, {
            pid: "7a57b70776bb4dc6835c15d4b932c2fa"
        }, {
            pid: "6a9085ff414847b598a76abb2de8c121"
        }],
        Medium: [{
            pid: "c8b0ba1686634f8bb08b0abd29e64ece"
        }, {
            pid: "87052af64cbc4ddab2784611455fe51b"
        }, {
            pid: "192c738ee2a3461d9b6ccad6e09a73c0"
        }],
        Coarse: [{
            pid: "277e357cf3984eea823d69be105a8d02"
        }, {
            pid: "76d82694eddd4e3a99a1be7e2e62f7dd"
        }, {
            pid: "dc72cfb8973a4805855e0d8b0e2867c1"
        }],
        Powder: [{
            pid: "9e315687c520431f936e1b681e14f4a8"
        }, {
            pid: "eec22bc3738645959bc9adb01f764854"
        }, {
            pid: "bea286d811b84ab691f97fdc0f6be5bb"
        }]
    }), new Frit('0207.jpg', '0207', 'Celadon Green', 'C', {
        Fine: [{
            pid: "7b631ef42cc44859afd8a356bc698e91"
        }, {
            pid: "efd72025fbbb41c695a93fbece914ce1"
        }, {
            pid: "f7010a872ec04d6483477b16912e5255"
        }],
        Medium: [{
            pid: "ff18a9180dd2454eaf0f1aeb1689b6aa"
        }, {
            pid: "4f8163a4d1b047d4a2081de834e401cc"
        }, {
            pid: "3995880fd82042caa991a45af125b3c4"
        }],
        Coarse: [{
            pid: "7b770bdc70cb42b4a1047b9583533deb"
        }, {
            pid: "974cfd785c88414881a616cda6d49d0c"
        }, {
            pid: "b4664a61ff2a4217a89db1e693abe4a0"
        }],
        Powder: [{
            pid: "75aff583d3b44bb899354ad81edb9496"
        }, {
            pid: "102c5ec6e5674a4b8d659acc6d8ca2d9"
        }, {
            pid: "e021dbaa1ad34c35a8014e5c68ed3205"
        }]
    }), new Frit('0208.jpg', '0208', 'Dusty Blue', 'C', {
        Fine: [{
            pid: "fbd3adfaf9fd4a35bd7685ea1086b679"
        }, {
            pid: "df2902d628784f009a7bc230914de6ed"
        }, {
            pid: "30f58ec99c5545f8b0a11ee549e12cd4"
        }],
        Medium: [{
            pid: "2c119797fd1c445780f328b1a8cd86ed"
        }, {
            pid: "b5cae400b2ba469dbf0b18ffefc1feef"
        }, {
            pid: "5f6045c7ba2b4c54ae9e835e4a4a8697"
        }],
        Coarse: [{
            pid: "f46571c70f81400f8dbb207734a7d232"
        }, {
            pid: "ab7eb8a656094952b803f11c00d7067a"
        }, {
            pid: "1f0b58e55d024c54a4476e9ee0adab33"
        }],
        Powder: [{
            pid: "3915e57fad484dfc95143c833fc7b805"
        }, {
            pid: "54aa6ffefab24b72a93a063e65c99543"
        }, {
            pid: "51ae73543b844fffaa0775c72233e76a"
        }]
    }), new Frit('0212.jpg', '0212', 'Olive Green', 'B', {
        Fine: [{
            pid: "704d01d2219549192ebcfad6841db8a7"
        }, {
            pid: "27d098f46827c57abeefd0e7e2ca8cb7"
        }, {
            pid: "6b3530c406964827f2a4a9ad9c105687"
        }],
        Medium: [{
            pid: "399fb487df076ebd58764b2ec474ca6e"
        }, {
            pid: "91c247d9c69e38e6a949795a855a1b93"
        }, {
            pid: "45162d1cb9c2554207ae0f6b7ba7b5aa"
        }],
        Coarse: [{
            pid: "1e8db3f6b7f21943c8b9fb4dc2de0f01"
        }, {
            pid: "a44b19767e2ccc1535c006006a2f2bc3"
        }, {
            pid: "119e75e77f9c96344654f658eb549c75"
        }],
        Powder: [{
            pid: "86e6fe324219bcef2101a4260873de54"
        }, {
            pid: "8030483a287862d1082d70efe51ec76e"
        }, {
            pid: "142c1c18dead093331ed1d6877f3437f"
        }]
    }), new Frit('0216.jpg', '0216', 'Light Cyan', 'B', {
        Fine: [{
            pid: "a3639510e11c98b78d318fe58df87070"
        }, {
            pid: "7cc63fbbe0fb2801338a5f3d4c3cc61e"
        }, {
            pid: "055b16d9f5cb49004fda72f55d924439"
        }],
        Medium: [{
            pid: "734b7a6f266f17a5028e05919d5466e5"
        }, {
            pid: "5aa361d3f97e5b4fb88bb3db255aa1ba"
        }, {
            pid: "9c120d0e5b85fc3c510fc9c5f84c78c7"
        }],
        Coarse: [{
            pid: "9298641dd1809fd7cdc99d7c6413dffe"
        }, {
            pid: "0275c3974d2921f3beb1e5f8b3c4cfa8"
        }, {
            pid: "c4517710b1c9afd425500b08c847d693"
        }],
        Powder: [{
            pid: "a16bfd1f948cd233d03e7c6e1e4f5d1f"
        }, {
            pid: "393a58dbe1333e6b2101ee6139111acf"
        }, {
            pid: "f355377e06f3532f16011db84fafc67b"
        }]
    }, {
        Powder: false
    }), new Frit('0220.jpg', '0220', 'Sunflower Yellow', 'C', {
        Fine: [{
            pid: "e3ed5574734482ef00081c8ba40a7dc5"
        }, {
            pid: "97408c52c82f2dead5d840a1e3ecd86a"
        }, {
            pid: "710c8fec20e4705335221c15732dfd66"
        }],
        Medium: [{
            pid: "609fa7a273dd896c7e5ab5520ad83192"
        }, {
            pid: "c8c7ee0d17caf64584dfc52032d98a33"
        }, {
            pid: "7883d0aa7d4a386dddf94d298f4eb40a"
        }],
        Coarse: [{
            pid: "e0ddcb1d6cfe95145ba6bc7fdf9e09cb"
        }, {
            pid: "e2c0dacd2288e402eb5ae8e84be160d9"
        }, {
            pid: "7f5f6459754dccd8a572af9120ddb22b"
        }],
        Powder: [{
            pid: "2713d41a84c4950f384d31b6a28a12b1"
        }, {
            pid: "1505934a2aaab76c0668f82002852058"
        }, {
            pid: "6b6380c55dcb4bb7b617ecfd5f2cf15c"
        }]
    }), new Frit('0224.jpg', '0224', 'Deep Red', 'C', {
        Fine: [{
            pid: "c7fd74d9025584392972e4bc5acf87ef"
        }, {
            pid: "b36aa25dd5c7507a95bc7fcb5f7a6ede"
        }, {
            pid: "c65875107a5899c4cb1b991269cb2f42"
        }],
        Medium: [{
            pid: "63d7c9e2561b2dc2ac8fc9560c110694"
        }, {
            pid: "3489ac1f27bf0fedaa6e32a3f0357b91"
        }, {
            pid: "bd9535c947814e7e0bdd262e873093b7"
        }],
        Coarse: [{
            pid: "4e67762378d47a970e1b6d6309315e7b"
        }, {
            pid: "ec577a4b454797b0c984fe7d91382300"
        }, {
            pid: "f5474dfb236da8309a263a23243a4295"
        }],
        Powder: [{
            pid: "f71280a31f69411e7c598993360f480e"
        }, {
            pid: "66b12145e4cb008a50fd3ff0caeffc90"
        }, {
            pid: "b5cee297fe5762dc380b153facc56dcc"
        }]
    }), new Frit('0225.jpg', '0225', 'Pimento Red', 'C', {
        Fine: [{
            pid: "48e9922a3b3fbd6731ad67906f5636f2"
        }, {
            pid: "e23de9d4e73f46c6c9b3e2e9dded5f93"
        }, {
            pid: "bd15e4ba949178a46703318c0ccba4a4"
        }],
        Medium: [{
            pid: "17cd25c6c0de3ce0b19a55fd0b8ac194"
        }, {
            pid: "885e460caabe7910b6ebb8f14bb42eb5"
        }, {
            pid: "cb12f802a87e9a41c19b0d89be1fad30"
        }],
        Coarse: [{
            pid: "b81f63ec703e06248cdce9a7526b5de6"
        }, {
            pid: "09d480411c5b3aee7adbd8e28f30a19a"
        }, {
            pid: "8b900320e138fc7b7ef86ad72e1f85a1"
        }],
        Powder: [{
            pid: "a90946ec579d931686fdb84599715f89"
        }, {
            pid: "35aff08c116b458143c6649db15eb87e"
        }, {
            pid: "306dd35cfe9de1ffd380fdb387c0902a"
        }]
    }), new Frit('0227goldengreen.jpg', '0227', 'Golden Green', 'C', {
        Fine: [{
            pid: "f2568a005b58a24b7e4e21492071c3d7"
        }, {
            pid: "0cceb6581f17b36e51caf291ce584d01"
        }, {
            pid: "7fd3ef695f237558c92e7394ed8f9260"
        }],
        Medium: [{
            pid: "388d11b790bf4340a73a703625d9013b"
        }, {
            pid: "ce928d78b0506e6a4c74d48b93df3f08"
        }, {
            pid: "8b0ee580288531c5cb0e7b6ba7a46df3"
        }],
        Coarse: [{
            pid: "eb8732b48deac53dffa8419be602f39f"
        }, {
            pid: "5c883049118444ad86e078be847c0ccb"
        }, {
            pid: "82f59eec64ea3c94321292d54197f118"
        }],
        Powder: [{
            pid: "e8738bbbf4e6df4d36f7af55ed7d639f"
        }, {
            pid: "112f97e6c36bb62b822b4d1efd785952"
        }, {
            pid: "628d2a351d4b4353b0483ed887f16b21"
        }]
    }), new Frit('0236slategray.jpg', '0236', 'Slate Gray', 'C', {
        Fine: [{
            pid: "102ac483545a403d85f56c5bf5a0ad4b"
        }, {
            pid: "7a77f06ed2c147168248d96fb4695b24"
        }, {
            pid: "643b0aa8ac3c4c718f9015617d4f56a3"
        }],
        Medium: [{
            pid: "6977d9e6ece64a5cb49728607c505f6f"
        }, {
            pid: "e359fa2d1a254651ad38d5403d9ba1ed"
        }, {
            pid: "0bbfe36bfe6e49bd9b097151db13d00a"
        }],
        Coarse: [{
            pid: "f8faa9b978104709bed0c622362000b4"
        }, {
            pid: "61f491a516514a03b37bd36104dd24d8"
        }, {
            pid: "2f95dfe7acf14d91bbcebe7c481f788c"
        }],
        Powder: [{
            pid: "d578274947234ad09eb57645c8667613"
        }, {
            pid: "8cd56366f84f47d9a65253a7777221da"
        }, {
            pid: "b975bda8ac9341d29bbde00ed3edad49"
        }]
    }), new Frit('0243.jpg', '0243', 'Translucent White Opalescent', 'C', {
        Fine: [{
            pid: "90b82592ba4a9a3b4e767417fbd8de72"
        }, {
            pid: "6ce777a77c767e7eff71125eddd3602f"
        }, {
            pid: "da713d90287e16c965e0e9030483d835"
        }],
        Medium: [{
            pid: "b62fc10bc5f9568832979d9a38e8ea49"
        }, {
            pid: "cbc5342b01693300650bd87d1768cec1"
        }, {
            pid: "ff1fdf125fb5a31f2b4e3c7ec5787d0e"
        }],
        Coarse: [{
            pid: "a352136ef56e74b8b8eb9191fe59afda"
        }, {
            pid: "08457f2a90467834c8f9bfc8a2bad367"
        }, {
            pid: "737df9c9705143a3c34565725188cd7d"
        }],
        Powder: [{
            pid: "a0e50eadbc10a263c94c51319630ae76"
        }, {
            pid: "e29b55894dd5f2d64ed551efbee23ab1"
        }, {
            pid: "b3841715f9049e3dcd225e6198e9af94"
        }]
    }), new Frit('0301.jpg', '0301', 'Pink', 'F', {
        Fine: [{
            pid: "999ffcf96155ac8cfbc83d5de81ed66d"
        }, {
            pid: "32aaaf17f1ccbbdbfc598a9b813ff796"
        }, {
            pid: "a57ca7dd6642dff4c8e038186abf30b1"
        }],
        Medium: [{
            pid: "dae21079957e4be891a8e40c53c3db56"
        }, {
            pid: "d0368abbbde272c628de5a2f83f67d7f"
        }, {
            pid: "c604fc3c170e8d2338b9e07302752449"
        }],
        Coarse: [{
            pid: "e41218bee0f997d8005a900443f30fe0"
        }, {
            pid: "25f30d1eab01e7b4952d2a4c46fb2407"
        }, {
            pid: "5edee83f77c3ae723a526e9b3607952f"
        }],
        Powder: [{
            pid: "01b9e5f1569b467e826f92da5de3b6d8"
        }, {
            pid: "d2d77a6c91a78f9a84d00d5bcb08dc55"
        }, {
            pid: "b9355f0707b7407c01e6df0ff839190c"
        }]
    }), new Frit('0303.jpg', '0303', 'Dusty Lilac', 'C', {
        Fine: [{
            pid: "c5f6be26102e241906bdc1ad55ed1d93"
        }, {
            pid: "80bcd701a732977a25df41bf26b021f1"
        }, {
            pid: "7549456bbbbdd1adb4bb7a82937823c5"
        }],
        Medium: [{
            pid: "a5d5476e54bc253e364e0066aaa75c1b"
        }, {
            pid: "f9028c04114eeff6b40942afb690f517"
        }, {
            pid: "b6150d3c10972fb9d69dc3e2d9c25e4d"
        }],
        Coarse: [{
            pid: "38b923333593b2327f7f7899d6e24158"
        }, {
            pid: "ca3bc7bb81902236aca934ad684e15a4"
        }, {
            pid: "282400d6e869cd7a8bcff9019cc2b904"
        }],
        Powder: [{
            pid: "dea94c184826253aae204077c058cf8c"
        }, {
            pid: "24f986595386be3c2d3a3608f3959db4"
        }, {
            pid: "65ca2f73dcb5c7828349b5d85d0d8f44"
        }]
    }, {
        Fine: false,
        Medium: false,
        Powder: false,
    }),
    new Frit('0305.jpg', '0305', 'Salmon Pink', 'F', {
        Fine: [{
            pid: "3cdea17f42f21bc9d0c15954a8347e57"
        }, {
            pid: "78dc68f9c568faf5987900d64a4d21c4"
        }, {
            pid: "e55663875f9240fe31ec04068e18698a"
        }],
        Medium: [{
            pid: "3a8e2a6b6a969d5d4818776058c7937a"
        }, {
            pid: "cb0d785b7c846c5fca8e89e7a3cddb79"
        }, {
            pid: "c56734cfcf81ffa766ed8551b5990a1e"
        }],
        Coarse: [{
            pid: "0334c4c92c3f4a5df3281e14b3ce8983"
        }, {
            pid: "616e4c3a39ee4ce608504c9275659de4"
        }, {
            pid: "5598ecd8129f7a6ce1cd5fef79dde52e"
        }],
        Powder: [{
            pid: "cda5ea5412b7cd62f61f01243f3c9730"
        }, {
            pid: "0340242a7f5cc9b4038bf9969c5390a1"
        }, {
            pid: "2b68eaa0e8d09555116911ab7e46e2ea"
        }]
    }), new Frit('0309.jpg', '0309', 'Cinnabar', 'D', {
        Fine: [{
            pid: "460abbc5d5c237de0e17427834c9110b"
        }, {
            pid: "5f491160ebdc4e367099aaefa3e87b59"
        }, {
            pid: "c71359bc0ba10adaa224f009d3f84c65"
        }],
        Medium: [{
            pid: "4638167f26b88fb514d523ff18c6d25f"
        }, {
            pid: "30d5e20242121a0decbfa79f2e3e73b6"
        }, {
            pid: "ca40b8246f3440cc61fded6bd192b89a"
        }],
        Coarse: [{
            pid: "32041ac28e614f3a884bdab63a92d1f8"
        }, {
            pid: "9d25a124008d22856fb23493c85c87be"
        }, {
            pid: "a2738b940727b14524aa3469ffd7ea51"
        }],
        Powder: [{
            pid: "8ef429844e2f4e8f73b0a0fe5d59da67"
        }, {
            pid: "16ac9935e34ad394107db858267b17bf"
        }, {
            pid: "56342a9ada7c8249587c868f21c85b61"
        }]
    }), new Frit('0310Umber.jpg', '0310', 'Umber', 'D', {
        Fine: [{
            pid: "91d0a4274d784871aa0c1cd2112ca559"
        }, {
            pid: "ac560b257e8640e4846fd48bff685aab"
        }, {
            pid: "ec6d127f69d846af933f63e74aada5ba"
        }],
        Medium: [{
            pid: "0d09d6d1277d48fda8c98fe22e58a005"
        }, {
            pid: "4afca96e0ed14dac885ed22bde79f05d"
        }, {
            pid: "2b762bfb4fa84b1e8b4848cde69192d2"
        }],
        Coarse: [{
            pid: "5b0b72dcf0624be5abbb5537986205e5"
        }, {
            pid: "82164c790090443598ee74f98ce64e5a"
        }, {
            pid: "fa1221fb73164ee78116394840d779d9"
        }],
        Powder: [{
            pid: "6f645efc921d42828dbdc47e6bc38b4a"
        }, {
            pid: "5a243f83944a4749b64fe97be995e8b2"
        }, {
            pid: "9cba5b88893e4c7f8a8c49b00b133e6d"
        }]
    }), new Frit('0312peapod.jpg', '0312', 'Pea Pod', 'C', {
        Fine: [{
            pid: "0af33f50e358466590dc2cd00c9fb66f"
        }, {
            pid: "f9f5e8a07f8a49b5aa9e7375102a76d8"
        }, {
            pid: "291e39e73cbf4737b25c6077efc585bd"
        }],
        Medium: [{
            pid: "bdd8a75969614528a0e501139797aada"
        }, {
            pid: "f7c92d01067847619d8135ab2a42296e"
        }, {
            pid: "3f03b7342bbc4e3fbb7c0ebec3988c57"
        }],
        Coarse: [{
            pid: "36174f77716543ba824ee80314bc3fe9"
        }, {
            pid: "2e663406797348a39170c5cd38cfa9ce"
        }, {
            pid: "15d348692b3b47879606cc66d1541c53"
        }],
        Powder: [{
            pid: "b23efbfaa5de40c08cd8abbe432536b7"
        }, {
            pid: "c216ecb3177642eaa0001169448ee2e0"
        }, {
            pid: "aa0350ea6f5f7058c87ed4d685aff182"
        }]
    }), new Frit('0320.jpg', '0320', 'Marigold Yellow', 'C', {
        Fine: [{
            pid: "4843d1f6de63954798357b69a2ba2a3a"
        }, {
            pid: "bb842284e33fbed1e678daaebe8e76d8"
        }, {
            pid: "24d923a142f0638adcea16e6a99febb4"
        }],
        Medium: [{
            pid: "e8529d5918b4fcb97e6cfc7faa6a4926"
        }, {
            pid: "b83bd8761138de0ad4f294ced52927ca"
        }, {
            pid: "dabd1bda6ca7a9e9644dd1bb5f0ca1d3"
        }],
        Coarse: [{
            pid: "bbad29f818a45b6015283a255c03bd50"
        }, {
            pid: "bfb59df6ade246139151bdd963db0d8e"
        }, {
            pid: "7aa90b8f8256481fab4daf499cb34a43"
        }],
        Powder: [{
            pid: "9ab896ad84b7e0882940f34cb1892150"
        }, {
            pid: "e02831ed1da648c51d3a79dfde59e2ef"
        }, {
            pid: "8155e87f6c265b935c4e2fabbd6620cb"
        }]
    }), new Frit('0321.jpg', '0321', 'Pumpkin Orange', 'C', {
        Fine: [{
            pid: "a4b3b2a8df03fc82f6eb1c93a224bf69"
        }, {
            pid: "5c0a9977bcd2bb30fa701e48221b3c2b"
        }, {
            pid: "62c7a70279f99942fc086c334f750717"
        }],
        Medium: [{
            pid: "0b6b02d13d6d3c25c28be5ce1e25d01f"
        }, {
            pid: "1b22800d783967d8d173750a4e905fcd"
        }, {
            pid: "fd0b14cfd59418112282234d04aa3e4b"
        }],
        Coarse: [{
            pid: "9e3f76d200013780e856da8f71bb6039"
        }, {
            pid: "6187755d6e91615d14bff14509d6a60f"
        }, {
            pid: "3b6e9ee5c3b9c0bad8193af2f99a4397"
        }],
        Powder: [{
            pid: "edd169b8ddb5d35f9d802b723af80171"
        }, {
            pid: "0349ba150bc489aae362ba7385bfb31d"
        }, {
            pid: "ae05412cc88dd3dfd0695396c11b9c56"
        }]
    }), new Frit('0334.jpg', '0334', 'Gold Purple', 'F', {
        Fine: [{
            pid: "1a657b14afac4e9ebaa5f814c37e2000"
        }, {
            pid: "3c546fb4dbe62819b90d56905bc29d6d"
        }, {
            pid: "66397f9544db08fe56c6e455344c193d"
        }],
        Medium: [{
            pid: "72fc55a41d673d7baae7beac1fd78252"
        }, {
            pid: "2c82048f7cbd3e733994bbe7aeae8996"
        }, {
            pid: "1dafc87913c3ee7047eaa0eb839e2142"
        }],
        Coarse: [{
            pid: "3071080cfa2694b0a6be002b924fd086"
        }, {
            pid: "6a82248510cda51e6eda892f9551e8b9"
        }, {
            pid: "9f1e9a2489d834d211dfe462e2a013d7"
        }],
        Powder: [{
            pid: "05bdc99c2f5d8fdfeeb848b7f9dbd69b"
        }, {
            pid: "6593c98a3dd5f1f48e5b3c5785652611"
        }, {
            pid: "14bc1384dec4431bbd556430d3556986"
        }]
    }), new Frit('0336deepgray.jpg', '0336', 'Deep Gray', 'C', {
        Fine: [{
            pid: "20803fe713e94184ab53338295e32c58"
        }, {
            pid: "3ae68c046c044f2fab850da9be2ee222"
        }, {
            pid: "18bb3e2e8cd4473eb9cb151c069deabd"
        }],
        Medium: [{
            pid: "5b521526764d43fea5cd085154952c9a"
        }, {
            pid: "eae77d7e3ba94552a7fd8323d959d019"
        }, {
            pid: "f5357680bf1a4806beb820171631612d"
        }],
        Coarse: [{
            pid: "834e1794b07b467488f2a9d222e9d224"
        }, {
            pid: "a686c52646434fc5994bf6296a8698bc"
        }, {
            pid: "bb6c8313865e4b62a1019bf1c605391d"
        }],
        Powder: [{
            pid: "6410df7048b24ade96d20593de8d7d49"
        }, {
            pid: "0e8753599d1142d3b5c39f9d3cbcb1e5"
        }, {
            pid: "38a9e9ea6e4640c0a4876804c931aaa6"
        }]
    }), new Frit('0337butterscotch.jpg', '0337', 'Butterscotch', 'C', {
        Fine: [{
            pid: "9c7f85cc9173f4b066b907a308537c60"
        }, {
            pid: "3d98f4bf86b311f41720bea2ec6bac68"
        }, {
            pid: "f72931ba0db39689a50e952bbfcd3911"
        }],
        Medium: [{
            pid: "7c405cc2296fdc2cf47f256b52af10b0"
        }, {
            pid: "2262812f292f9b64a734c4d1952ceffa"
        }, {
            pid: "f89031a21a2c11e1ce53b57da471458b"
        }],
        Coarse: [{
            pid: "834e1794b07b467488f2a9d222e9d224"
        }, {
            pid: "a686c52646434fc5994bf6296a8698bc"
        }, {
            pid: "bb6c8313865e4b62a1019bf1c605391d"
        }],
        Powder: [{
            pid: "f19245ec3b5a7ee52f744f83b1fc3141"
        }, {
            pid: "a4169c8f19d7adc6ef261c19b88028c1"
        }, {
            pid: "7a9dabd861f33b4b0513f7a44ff62948"
        }]
    }), new Frit('0403opaline.jpg', '0403', 'Opaline', 'D', {
        Fine: [{
            pid: "e380b2a5b98343b6ace85ebd90c38295"
        }, {
            pid: "1e5e54cc86764be992245c784fad4ead"
        }, {
            pid: "cce4a37221bf4196adf968301bd1c457"
        }],
        Medium: [{
            pid: "7d5fe2b4abf64a65a5135450ce10b465"
        }, {
            pid: "fd9ee70bdff44926ae7a7b8b30a32466"
        }, {
            pid: "4beb2b3178234abb85524964ef7d9432"
        }],
        Coarse: [{
            pid: "219aa28843544ed38fdd41a388888b3f"
        }, {
            pid: "2e2aac4584ee4ec4911098f845e5f948"
        }, {
            pid: "b0df9e27785d49b285b31675ad6fe236"
        }],
        Powder: [{
            pid: "8a49455994284aedb190ba202ff57a0b"
        }, {
            pid: "72987695f0e6478a8ca6d0d7a3323781"
        }, {
            pid: "ed3bf43d47854237a18b9adda05c79e9"
        }]
    }), new Frit('0420.jpg', '0420', 'Cream', 'D', {
        Fine: [{
            pid: "af8890f659a347209448bae420f1221d"
        }, {
            pid: "e56ae6c680d94913b172bdf4d2ec2c28"
        }, {
            pid: "7483fd70dd194dd1bec78a377f959e0a"
        }],
        Medium: [{
            pid: "21bc08dedce844318badee6c61cf531c"
        }, {
            pid: "7b8610fc84264b438618312da287cd8f"
        }, {
            pid: "59baafeb14e84e8f91e17d96ca075d79"
        }],
        Coarse: [{
            pid: "53a01e5eeaa14e13b4edbaee4508b9bb"
        }, {
            pid: "66af5909b1ff450193f0626c55bf3c3c"
        }, {
            pid: "8647d0a568844b0caecc2d52ae5c6b59"
        }],
        Powder: [{
            pid: "c19a9e89af8e45e5a5d0b1fc618f37c4"
        }, {
            pid: "661ead96a5d34f69942c6b6ab3d3f734"
        }, {
            pid: "b029b2e06cfb4e9fab94da1e310ab9a4"
        }]
    }), new Frit('0421.jpg', '0421', 'Petal Pink', 'E', {
        Fine: [{
            pid: "55fb7dd8ae6a14bf634b144836014917"
        }, {
            pid: "fb5f2b5bf4add545cb90d0da66ff5b94"
        }, {
            pid: "1778c765b822ad8c430947cbc5f09076"
        }],
        Medium: [{
            pid: "92e5f46780560d7c4077282a3bd2ef02"
        }, {
            pid: "b874ddf0a0592395a47376bbf42164ac"
        }, {
            pid: "61c3d3d6ceab8516631d1f87d255d347"
        }],
        Coarse: [{
            pid: "dffeedf3e1d29c0e7679e712f5146634"
        }, {
            pid: "446dc5af31dd2b1ea54fe468b490d94f"
        }, {
            pid: "fedf8c8f0d6b602f85667d3023393f7c"
        }],
        Powder: [{
            pid: "4740e72662230534c171fd919e2e6d0a"
        }, {
            pid: "d87ed14f174c91d0411f62696bf8fb17"
        }, {
            pid: "d778b94860cff8bd7e3e4aac6e9868cd"
        }]
    }), new Frit('0920.jpg', '0920', 'Warm White', 'C', {
        Fine: [{
            pid: "df66105523f94e0eb8036e893b9dc8a8"
        }, {
            pid: "5fdf480087f740e8aecac13562dce653"
        }, {
            pid: "e5dabe90ad794f3eac3f03c16a03abbb"
        }],
        Medium: [{
            pid: "3fe1e2efebe04ad9ac29f350a4e36bf9"
        }, {
            pid: "d1b02071430c4ffebb19bc6ab72b4efd"
        }, {
            pid: "da6112fdbecf42e9b380c2431459fe56"
        }],
        Coarse: [{
            pid: "03feaa2132c74d7b99ec72735fb0dcaf"
        }, {
            pid: "3ac4fd2a2c434e72bd8cd5a80a5cb121"
        }, {
            pid: "55c27321466f4b15bb1550d759af70a8"
        }],
        Powder: [{
            pid: "2612ebd4cf7f4c238d379df2701842f5"
        }, {
            pid: "e04e8432a9674b5e89245b2a10738ff9"
        }, {
            pid: "984825bdc2c0485ea7d07df728af155f"
        }]
    })
];

var transparent = [new Frit('1101.jpg', '1009', 'Reactive Ice', 'D', {
    Fine: [{
        pid: "ca19d6334a3386b55e70c68ed64f1b90"
    }, {
        pid: "d8a5cd1460ef568805b2ac0ea2445502"
    }, {
        pid: "8b7c14c30758d576f6a2b7e00bb955a7"
    }],
    Medium: [{
        pid: "aa7f60b906f2351d8e00d7aaf1e4b94d"
    }, {
        pid: "154deb58b3ef041719c49e65d4d7747b"
    }, {
        pid: "da49ab808a6235ec277fd6c9b6cca900"
    }],
    Coarse: [{
        pid: "0fbba1111187663ff38a29291938e7d4"
    }, {
        pid: "5018da6bd1a05189ef06e507eab961e5"
    }, {
        pid: "8aebc0d2d9deb830704bac94458b2cd9"
    }],
    Powder: [{
        pid: "54d23730e11acc9c6ae799ddc534130d"
    }, {
        pid: "86d06778ea2a13e764ec304874fab8f9"
    }, {
        pid: "7fa2861a99f06a20ec578aab5feb2494"
    }]
}), new Frit('1025.jpg', '1025', 'Lt. Orange Striker', 'C', {
    Fine: [{
        pid: "6d1c97a230db487cbc89db610b8bc617"
    }, {
        pid: "42603dde65e341c0bc6c501de0c81f24"
    }, {
        pid: "f8ca10c3e3b544d5a28c95b15319dfce"
    }],
    Medium: [{
        pid: "a9287f34674847588a179d7aeee78986"
    }, {
        pid: "9e9ef00f593c49d098dd2c6b81df944a"
    }, {
        pid: "8c8d26804aa04f9e8c969fe6abb4d16f"
    }],
    Coarse: [{
        pid: "981c3c6c8e054723b4cf0d476a3389b6"
    }, {
        pid: "a76548b7b2c844858796fe6ef74796f7"
    }, {
        pid: "6433f86e67a44f3cb68bc1bb5d4f0e0e"
    }],
    Powder: [{
        pid: "be9363594afc4cac9d8e8589053c3bf0"
    }, {
        pid: "3c3a0a0e44804cac8786424a25f9dbbd"
    }, {
        pid: "a648e8b9eb5243ceb75034ea107f60ae"
    }]
}), new Frit('1101.jpg', '1101', 'Clear', 'A', {
    Fine: [{
        pid: "fa144965fe3548a74fb8cd0de2f2af08"
    }, {
        pid: "b01a8f68dd991dcd3f6ad5b9c36d0d2e"
    }, {
        pid: "4e1971abe81a2a6511bb820789c15677"
    }],
    Medium: [{
        pid: "4b9170b266eef1c2a7127e7bed7ce54d"
    }, {
        pid: "4eca045a5c77ffdc2025704b46a3c6dd"
    }, {
        pid: "3dda4782895aaef8c5f91bf51628b1bd"
    }],
    Coarse: [{
        pid: "bf00ed319d991d477ef397cd46cbe0f1"
    }, {
        pid: "a9239f2face91e51a4924d813a25852b"
    }, {
        pid: "e7c0a4ad1fa0d76b7abdd39c67a6cbc4"
    }],
    Powder: [{
        pid: "4a84c9b4d14997d702750593c2f05545"
    }, {
        pid: "d5ca1d6a50f9b64ca27ebceec32e6d5a"
    }, {
        pid: "9a15b4fb6e9b53c71360a645b8cf100b"
    }]
}, {
    Fine: false,
}), new Frit('1105.jpg', '1105', 'Deep Plum', 'B', {
    Fine: [{
        pid: "2d24c2f934cd1fda8a6d3cee2d59696d"
    }, {
        pid: "8114be7ca8e19ebdb79917a4cece100c"
    }, {
        pid: "400d971eb0cfd6d6e53c384cfb545552"
    }],
    Medium: [{
        pid: "b898a88f065a31c5d318e76d108a1763"
    }, {
        pid: "d63ae2829e5278c02762da650e37dc54"
    }, {
        pid: "9b79158005d7367a8cc2d1eab5cf5aed"
    }],
    Coarse: [{
        pid: "31ba8fbf9eacfcd5a89b59614003d8f8"
    }, {
        pid: "394d03919a26c4631f3dd67359e9b29e"
    }, {
        pid: "16f1d97bb40fbbf9235c5fdfd52008bd"
    }],
    Powder: [{
        pid: "ea3e7e70d337ca27d7443034ae62b4c5"
    }, {
        pid: "f0f1fa6d47405567b849b322f01d9af6"
    }, {
        pid: "8b7d82e25d59fb23f18723aa373186b8"
    }]
}), new Frit('1107.jpg', '1107', 'Light Green', 'B', {
    Fine: [{
        pid: "db6d6d56852de2d1bca83dfd96616312"
    }, {
        pid: "9fda9dd3d6c0be6601f2186983ee0ed5"
    }, {
        pid: "f5e5fc450728cd6c37261a4c43ceaf0a"
    }],
    Medium: [{
        pid: "50d1881a69cd7c249ab9db5b2e90174c"
    }, {
        pid: "b2a1b571b214577e704f16885b44e04c"
    }, {
        pid: "f6ae8fc8d93fa099171b9e80d67e66f5"
    }],
    Coarse: [{
        pid: "53e45b9c33200557b89ba33dfecf252e"
    }, {
        pid: "190edefe861b45ff0762f858572721d8"
    }, {
        pid: "65531f28e213f8439eafc88a94d6d39f"
    }],
    Powder: [{
        pid: "5a23f033cb91ae260dd3e8c5644a2f75"
    }, {
        pid: "57238aac1a3fcaf20c83322aacd1006f"
    }, {
        pid: "a01dd13199d9f1d350c3b0c7fcb4b99a"
    }]
}), new Frit('1108.jpg', '1108', 'Aquamarine Blue', 'B', {
    Fine: [{
        pid: "5d4e788e64583c9e6af1989704ce0ea4"
    }, {
        pid: "5ca75c22af66515797a1c4c61f350c87"
    }, {
        pid: "22ed2c3591c715b2ac29b2a139433662"
    }],
    Medium: [{
        pid: "1362060429233c951babb4e67d5d2ff2"
    }, {
        pid: "8625ca8b11480d4610b0099257e01acf"
    }, {
        pid: "c4e917c3c711a87436fe38a6e7ab31b1"
    }],
    Coarse: [{
        pid: "4d03d336aa808db17af99d8c37c89c8b"
    }, {
        pid: "92f9220c0b3b0b09b0be8850f813846a"
    }, {
        pid: "203ea6246b2d6c9520dbefe1d9b41883"
    }],
    Powder: [{
        pid: "886addf31a31892b54b2d18732d308c9"
    }, {
        pid: "b2f24f9bf08631f759471c61a59a7e87"
    }, {
        pid: "a37f77234c642e0d1b1390c2f1fac3da"
    }]
}), new Frit('1109.jpg', '1109', 'Dark Rose Brown', 'B', {
    Fine: [{
        pin: "874fc308a211053a4699b0e714b634cf"
    }, {
        pin: "07c6db90eed44641760522c4324c95d9"
    }, {
        pin: "a5b6ddf57b289594e4b5f8ef5ae07fed"
    }],
    Medium: [{
        pin: "f449b295e60206a0e863d989051aaad6"
    }, {
        pin: "48e80188843baa7615faa4ca8741793e"
    }, {
        pin: "4cb57162995dd20989e64ce990119934"
    }],
    Coarse: [{
        pid: "6a440865b965001561be87c6cddede67"
    }, {
        pid: "719d1748fb2c99413d1fb3df5e9390af"
    }, {
        pid: "05fcc98ba05c6f6fd9bfb645c21248f2"
    }],
    Powder: [{
        pid: "46e8817668f92b8ba70c8e831a92a31a"
    }, {
        pid: "c68c03af15d74c96c2ee8a57906f61c1"
    }, {
        pid: "ca43260ac76b20a66207deee49d03e03"
    }]
}), new Frit('1112.jpg', '1112', 'Aventurine Green', 'B', {
    Fine: [{
        pid: "2a1b44d288321f97f68a876b0628c4ea"
    }, {
        pid: "d285a86e18d9cdd2864252a2d795f898"
    }, {
        pid: "1471735c33c261967fb277dd9f456842"
    }],
    Medium: [{
        pid: "3538d9feb6568be113420c3822f0a4fe"
    }, {
        pid: "ae07bc154aa34f728ccd178e3d2dc03b"
    }, {
        pid: "d920a3059f0042e182e308ec68428686"
    }],
    Coarse: [{
        pid: "8e5d79f5c0a5615ab4cccc6337b8b430"
    }, {
        pid: "43820d1429c31605f7de71d453d64581"
    }, {
        pid: "a219e58d5579b5a1ae7a170e962ec4fc"
    }],
    Powder: [{
        pid: "91b66bf46ce186e84cf2fe4d0da6ccb1"
    }, {
        pid: "352c72dc460792ceeb9b5fa67b8b1449"
    }, {
        pid: "507d70cf11478498785eeebfe21ad684"
    }]
}), new Frit('1114.jpg', '1114', 'Deep Royal Blue', 'B', {
    Fine: [{
        pid: "63b023570cce072fd96adbe016895069"
    }, {
        pid: "5c84293deb6889aaf15989714ef2b6b6"
    }, {
        pid: "2337d14f4a795ac98b8798c7ecef16a0"
    }],
    Medium: [{
        pid: "59d6b868eb377c9d67374b08c8297e9e"
    }, {
        pid: "7dca129c258f8ac9d00a93fcc8612274"
    }, {
        pid: "9c552700b9b8e89108ee311fb7ffb033"
    }],
    Coarse: [{
        pid: "f913b9edf38eddc9ccc370ca388b0b72"
    }, {
        pid: "48dd1f670f517b68cdc53a4db50f98a2"
    }, {
        pid: "fb677bd79bc7f83026e29e5143099d42"
    }],
    Powder: [{
        pid: "264f4f9c27d45b36a6ae816f78ca018f"
    }, {
        pid: "fc0ae158a03a4983818575731581881e"
    }, {
        pid: "fd1393957fc8752f89c394b1ebca5c1d"
    }]
}), new Frit('1116.jpg', '1116', 'Turquoise Blue', 'B', {
    Fine: [{
        pid: "dd8bc039b1a6a00f0b9d0801e94b9138"
    }, {
        pid: "4d2d475ef2d4e0f6b156af177ffc9800"
    }, {
        pid: "0558edd932d6dd3c55e5f7cac8160661"
    }],
    Medium: [{
        pid: "4ce4500ce5f000b6ef6cfcf79fe8e304"
    }, {
        pid: "0cdfbddef86f5d5683cfebba417e914d"
    }, {
        pid: "6fdd0f3d1a2e3567e52250d235537b35"
    }],
    Coarse: [{
        pid: "f0229f6159341a8609cae41f3ee145a0"
    }, {
        pid: "5d66b028fe58fd03af65e12b50797380"
    }, {
        pid: "ca217148bdffce0b8a651f7f5a68881d"
    }],
    Powder: [{
        pid: "bcde07add0d23a914c676cbaa1d0f72a"
    }, {
        pid: "2034828dd035a6c596045cc77ed74fdc"
    }, {
        pid: "b05aa81f70afba84b703530023613797"
    }]
}), new Frit('1118.jpg', '1118', 'Midnight Blue', 'B', {
    Fine: [{
        pid: "583323bb5d53699fb052bdf007b37608"
    }, {
        pid: "5ca6e523de37027b7b934d4ecd861ead"
    }, {
        pid: "63ea184a0e6b01b1a7c4a6325f3b9ca2"
    }],
    Medium: [{
        pid: "cb772023b192dc46e76e227d152396ea"
    }, {
        pid: "c56ae44622c350af4d3dcac38da4cfeb"
    }, {
        pid: "b138c64c935dc46439e3189ed21e24f1"
    }],
    Coarse: [{
        pid: "1bcf1936db5f58b0fe60a984b8e79f4a"
    }, {
        pid: "ae9ee1c43d977f8abbe37cc696091375"
    }, {
        pid: "6967ef80dad9efb912934c6243196cc1"
    }],
    Powder: [{
        pid: "c0aea02d4d231734ebd93e7c6757803c"
    }, {
        pid: "b5c512d5e1dcba11d67585bf6d48a05a"
    }, {
        pid: "f5e0121077023bd66573e0334d18d912"
    }]
}), new Frit('1119.jpg', '1119', 'Sienna', 'C', {
    Fine: [{
        pid: "95673ed2a1c7bac3527dcaed7fbcf328"
    }, {
        pid: "2e0261f769bc537ae1974866112a0d25"
    }, {
        pid: "21c4a019f84315e69d505d4095e47a3f"
    }],
    Medium: [{
        pid: "179d94730ecee2a256bdbb94b36df723"
    }, {
        pid: "fd7aa2f8793dcd4e8d52ebb8b1179537"
    }, {
        pid: "9e2ddd72f78913f25c5a9667e9820650"
    }],
    Coarse: [{
        pid: "2c9b53717288fe11e31773dbd2594979"
    }, {
        pid: "d756043c2941bcf5bfc3f236029cfbf5"
    }, {
        pid: "ca0e0e773d2d881f145355b62331cc5b"
    }],
    Powder: [{
        pid: "cd6797054826dd64759c89e48ce36b2c"
    }, {
        pid: "76fbc2de34a1d4971f4215ad78013a40"
    }, {
        pid: "9a098f1017234a3a25c44e09fda20e84"
    }]
}), new Frit('1120.jpg', '1120', 'Yellow', 'C', {
    Fine: [{
        pid: "d27b22bd6597f073d7a2570ee9b8c8d3"
    }, {
        pid: "b6f08a06e9c2f8396d3d9d71a1f94d77"
    }, {
        pid: "5eda3e300b27fda4ecac55bd64b29d6f"
    }],
    Medium: [{
        pid: "9e22aae5c1dc328c1c39f50392e71a0f"
    }, {
        pid: "933936deabf7c62a1c4e874f90573bd2"
    }, {
        pid: "5ad902a627da1e2cda0209141a572037"
    }],
    Coarse: [{
        pid: "cffd482575224e6b48d3d89dac44a59c"
    }, {
        pid: "3475c30a06d0b65d68c7fe1777c890b8"
    }, {
        pid: "19aaf37245f0a691fcd54e16a03c5fe6"
    }],
    Powder: [{
        pid: "c8713660b7d817997ad6949abe40d362"
    }, {
        pid: "dda78cacb73007089d830b92aa886a1b"
    }, {
        pid: "6566e59b44f15a0232eb705719311187"
    }]
}), new Frit('1122.jpg', '1122', 'Red-Orange', 'C', {
    Fine: [{
        pid: "89204774814cba0bd4b01511a4610d94"
    }, {
        pid: "425bd807309b00fc2fa92ab995b23d4e"
    }, {
        pid: "554e5a69cbd448d705a25654f9bae2be"
    }],
    Medium: [{
        pid: "60a770ee3293b060b68d1d3f16f79705"
    }, {
        pid: "37d63c60f4872c3909606ec74fb09c47"
    }, {
        pid: "bf7ced8453299510e09f9e34faa15ce1"
    }],
    Coarse: [{
        pid: "dd6b43bcc920a9e24ff05caa24e970bf"
    }, {
        pid: "50a7b3924a67bdebb7fbd7f56b4b7340"
    }, {
        pid: "980f6f8ba2eb08b709bf215c26b9ce46"
    }],
    Powder: [{
        pid: "4701d6284e7d4a95720251cbff7c1c87"
    }, {
        pid: "90b741e6dd3ce36733538db4b96a053b"
    }, {
        pid: "9dcc5333ea2307984aa478c713cff2cc"
    }]
}), new Frit('1125.jpg', '1125', 'Orange', 'C', {
    Fine: [{
        pid: "b396f0e1e158a9b3825b3243b595e7c1"
    }, {
        pid: "07944450a40d165cba49ba1420565734"
    }, {
        pid: "519497d21124359bb4407acea6e7da44"
    }],
    Medium: [{
        pid: "f356eb279888046a582953402ecca8ab"
    }, {
        pid: "a82cf102541e2d319eaa6b0c7bd5ba66"
    }, {
        pid: "fdf2f1dfebd9f3b7f2e96cd223d43316"
    }],
    Coarse: [{
        pid: "f190db46a4fc69f2d6b4bd9ffe32b61d"
    }, {
        pid: "eb438c9a4f233cfa31224b156e8d8a2d"
    }, {
        pid: "eac48937254c8d7922a7733c29106721"
    }],
    Powder: [{
        pid: "c1197fd76d3db297bba0d1eadf4abace"
    }, {
        pid: "57c42737da8022c0d8401967bd2abbd7"
    }, {
        pid: "996bf9b85b4e0aa5ce30ef71cc328059"
    }]
}), new Frit('1126.jpg', '1126', 'Chartreuse', 'C', {
    Fine: [{
        pid: "daf0a88d035768d3e8c825936626000d"
    }, {
        pid: "ca85dc1578701a1682c5b4fd4430e416"
    }, {
        pid: "b62d43c5b13e5619a209d94a42fff6eb"
    }],
    Medium: [{
        pid: "e85dcf5f92ec45d7757868c69515cd63"
    }, {
        pid: "1ecf2b04943723435ac0a5ae8cba029c"
    }, {
        pid: "8826ca1387f9cff6e5d3346af10ba831"
    }],
    Coarse: [{
        pid: "f9614bc2a5eee937f209f9faee675ddb"
    }, {
        pid: "ac4697a9f928a2feb1a8505d6dfcf2f8"
    }, {
        pid: "d2e923e479957ed2bea2a924e6feec04"
    }],
    Powder: [{
        pid: "4ee0045523752527cae4fd73576e7d83"
    }, {
        pid: "98e11fb4f04d29643cac14ee0f88626c"
    }, {
        pid: "3efcbf23dd6c0a486775158e7eacc82c"
    }]
}), new Frit('1128.jpg', '1128', 'Deep Royal Purple', 'B', {
    Fine: [{
        pid: "d0f9bf55f7865cef85e2168d83a1ccf2"
    }, {
        pid: "0dff5c17a926c67635b2ced8579ffb1c"
    }, {
        pid: "890445f3e81f6f8eb3ac23f4ec570825"
    }],
    Medium: [{
        pid: "71b01d7b0f500f2916be202999ef5746"
    }, {
        pid: "16386495b9d4735022aba1451ceb6993"
    }, {
        pid: "c8890344a8008da2116bbb005a435d93"
    }],
    Coarse: [{
        pid: "d7d14a67168141ab68278dc30a6ad688"
    }, {
        pid: "056fa8fbb2b96cf93070f26023c03086"
    }, {
        pid: "cf358a87af5e9c94d50c49a9512375c6"
    }],
    Powder: [{
        pid: "207a47c5c07d901674be81183a4616ba"
    }, {
        pid: "e3424f52bba3059c0abf49f6fb815ab1"
    }, {
        pid: "d4b6d3e5af0dd5a630cad8f5db35de81"
    }]
}), new Frit('1129.jpg', '1129', 'Charcoal Gray', 'B', {
    Fine: [{
        pid: "eca293ac41ea4a875fcd92831a051474"
    }, {
        pid: "8a489b258ca7931fed8805b51061f189"
    }, {
        pid: "8167a8674aa74e03754ba257b16db958"
    }],
    Medium: [{
        pid: "7cfe03c1de55476d5f61a5017ba4b7a7"
    }, {
        pid: "80b34bbd5dfbeab5fd0c38165eb12e51"
    }, {
        pid: "8b5b419a131e9e88404f1bb2c8554265"
    }],
    Coarse: [{
        pid: "b2f5a2bd9c1620d214dbb356b7772679"
    }, {
        pid: "86d44b6071675ec480339b8f126201e1"
    }, {
        pid: "7381dcd4fafe834b82ecd8044abb1fbb"
    }],
    Powder: [{
        pid: "933a334b0387982b3398d1c41ddcd8b3"
    }, {
        pid: "80e13a7250e1a3b10268105f319f2f25"
    }, {
        pid: "5f29fdc96ea231dfcf31e5bed753fd08"
    }]
}), new Frit('1137.jpg', '1137', 'Medium Amber', 'B', {
    Fine: [{
        pid: "8c95124fbf0f12d67fae351ff0819131"
    }, {
        pid: "6a4380c2e0ee2f4e3d0d4a67bdcf91b7"
    }, {
        pid: "87543a3238024756daf849dec8c7ed26"
    }],
    Medium: [{
        pid: "435a362d5214bf5d636592a823b1b98e"
    }, {
        pid: "59cfcadce962c663e37940a14f9fedb4"
    }, {
        pid: "0007285d4cc45113216e2b4b0c0b870f"
    }],
    Coarse: [{
        pid: "3de9526dbe93f5da6e3fdf23692a8833"
    }, {
        pid: "80ea46ee804e00f0c1d1b6816341aebb"
    }, {
        pid: "abf9d495a29d2539dcb49d96117395f6"
    }],
    Powder: [{
        pid: "deeab4027fca35747078b45a2c98d209"
    }, {
        pid: "1db8628bb0b3423f3d90f10e0fbb385e"
    }, {
        pid: "d78d370e1c9222359adc4be393f357d0"
    }]
}), new Frit('1140.jpg', '1140', 'Aventurine Blue', 'E', {
    Fine: [{
        pid: "518a776c40cb4c8fb0562ce3ecbb105b"
    }, {
        pid: "dddb06d765a24ae8aa6ffc1ce2778b80"
    }, {
        pid: "903a12bc5e7b4085ad703fe3e35dd9d7"
    }],
    Medium: [{
        pid: "9e98b145836b4006a860668fb6a3269e"
    }, {
        pid: "97cd3c7d95fe4d368b518717d74ecc20"
    }, {
        pid: "428db53816a1432e9b739cf6835a610d"
    }],
    Coarse: [{
        pid: "19b6d538c3a844ea91609081388ba0ab"
    }, {
        pid: "fa5c09f516b34b66acdf90a11dc801c4"
    }, {
        pid: "1693036b77ca4f9c821dfa8946d66819"
    }],
    Powder: [{
        pid: "31e37f721e85449da8e3a724bf1d2ebd"
    }, {
        pid: "9cb78ee2792042dd8625abf44adf96fd"
    }, {
        pid: "e8d07fc37238425d91922871b4638e47"
    }]
}), new Frit('1141.jpg', '1141', 'Olive Green', 'B', {
    Fine: [{
        pid: "cf5bbe1536516708b918b43f27a7c081"
    }, {
        pid: "6b109f2d8632fb6300aa92d3c161da80"
    }, {
        pid: "9ef4582bd6020abbfc1a30e415e52c4d"
    }],
    Medium: [{
        pid: "9f504b2c357b539a4adf6397f02de9bf"
    }, {
        pid: "3080c1aec7f2fe67ee7aca5037fe00d1"
    }, {
        pid: "4f8f90f7484bcf35bf7eded029771a63"
    }],
    Coarse: [{
        pid: "5e1de40665b4d7012721a8ab15b3aab8"
    }, {
        pid: "17e8f3a735f04b30d67528ac33cc7162"
    }, {
        pid: "c4528656cc1c43e410615b6d753471f4"
    }],
    Powder: [{
        pid: "75be43a2817ed9bff23dcb2d737b091b"
    }, {
        pid: "241693c1b3e4dd424971d0f9390b8552"
    }, {
        pid: "543ee9475a3e288e61f1023e84d33143"
    }]
}), new Frit('1145.jpg', '1145', 'Kelly Green', 'B', {
    Fine: [{
        pid: "696d566612a24530ae1633f11348b44a"
    }, {
        pid: "6f7b8fbe0ab367df2867584d752a8fb6"
    }, {
        pid: "16c426aaf3619aee58fecf45edf852b4"
    }],
    Medium: [{
        pid: "329b2c2bd148c3e93dbee2e0b86debda"
    }, {
        pid: "29cd332b7ddf7dd1173f02ffb43ba3ac"
    }, {
        pid: "d49596400b8bb6ec08fbbdad985a2bf0"
    }],
    Coarse: [{
        pid: "19b6d538c3a844ea91609081388ba0ab"
    }, {
        pid: "fa5c09f516b34b66acdf90a11dc801c4"
    }, {
        pid: "1693036b77ca4f9c821dfa8946d66819"
    }],
    Powder: [{
        pid: "8331cf9616ef5679ba770ccaec9242de"
    }, {
        pid: "94d70269237803686650cd2c3cfa8c4b"
    }, {
        pid: "3131227d741b336e1b45811d9a212707"
    }]
}), new Frit('1207.jpg', '1207', 'Fern Green', 'B', {
    Fine: [{
        pid: "3aff3a884c854e0db5cbee1f870c0af3"
    }, {
        pid: "d9d511161f95486b88d0f0aaefed23d4"
    }, {
        pid: "53519a790d304545967d3aca93cd55c8"
    }],
    Medium: [{
        pid: "847451776d684cdfa07418ca945a8c58"
    }, {
        pid: "b9048cec34f84a11a1b2a9f2355e233b"
    }, {
        pid: "71d65f51277546e896195c2fa66df05d"
    }],
    Coarse: [{
        pid: "7e30759547fb4c5c91c49845b5561c45"
    }, {
        pid: "f2e26b0c290248338328ac687012f1dc"
    }, {
        pid: "bb2f415f456a47f58c9f04beed92bc26"
    }],
    Powder: [{
        pid: "c4cd682c405c4d2bb2d1bc562fad270a"
    }, {
        pid: "585706a379a84db9a50d967a863d967f"
    }, {
        pid: "910e4c7acc4a4c4192f015395815dff8"
    }]
}), new Frit('1215.jpg', '1215', 'Light Pink Striker', 'F', {
    Fine: [{
        pid: "3c3077a5f00471b4591bf3916ee2e0a9"
    }, {
        pid: "906acd97b29eefaa1f0871207ffd1678"
    }, {
        pid: "0fc47607d0b3b787a0b3f2406ce6452b"
    }],
    Medium: [{
        pid: "32ade06887fff82730ca15fbd7f99111"
    }, {
        pid: "b546c3a8babbacee648b87b15a768c4c"
    }, {
        pid: "467e00ba00a600ec6168ff83f7c4057c"
    }],
    Coarse: [{
        pid: "2bb4bc593a242ed941d5a96bfa3d4175"
    }, {
        pid: "416dc53e44fbd702466a5ac5ab9ac6f6"
    }, {
        pid: "9755263b08b20cae64980f971502052c"
    }],
    Powder: [{
        pid: "fc738188460ac3e9fd82b951ed517bca"
    }, {
        pid: "75209482322365d54a04ee506e977fc0"
    }, {
        pid: "f861a99d27b77ff0b1549b25f7ce6e3f"
    }]
}), new Frit('1234.jpg', '1234', 'Violet Striker', 'F', {
    Fine: [{
        pid: "81769644526a9567c620c30c9fde302d"
    }, {
        pid: "415cef63011f2b87adda4327620ef8cf"
    }, {
        pid: "4c92b71c757605b09fd71a533f0cfc8d"
    }],
    Medium: [{
        pid: "a517b563e87b22b2d9386f0ffe34b350"
    }, {
        pid: "24352f008cee1bbff49d9d595ce2b0f1"
    }, {
        pid: "449fa2f44fdb6ffbefb55f08d58c9f9f"
    }],
    Coarse: [{
        pid: "cb731c8268d96aa65825e3dbd2b9d77e"
    }, {
        pid: "3467172bdaa9204dccc85f14af3546cc"
    }, {
        pid: "748cc646fe0dc89597be9c507c5d7d35"
    }],
    Powder: [{
        pid: "7964a6e9fd0015faa42ef7df8d98f63c"
    }, {
        pid: "70628921b527ce7afdb41b2490bdc20f"
    }, {
        pid: "a74aa722e6c824f1bd916b1dafb6764b"
    }]
}), new Frit('1241.jpg', '1241', 'Pine Green', 'B', {
    Fine: [{
        pid: "a54218702d958fc1486efba368cf4599"
    }, {
        pid: "4ec36c8f9ea706b6156fd9d7ace3bbcc"
    }, {
        pid: "78f714352506856d19bacaa5d81dcbb2"
    }],
    Medium: [{
        pid: "a9597e11a52197bc2da8dcbb0a2086c5"
    }, {
        pid: "b2e8ce2b8bbb5690f022112894dc4a74"
    }, {
        pid: "712d8d430cc6fb8186a83efd8db988fd"
    }],
    Coarse: [{
        pid: "24c6ca692f6147b6452a765b0f5f1c97"
    }, {
        pid: "a0ce46be7492c973e8b57e51a718b052"
    }, {
        pid: "e53591291c589cd62a026cfba9f986e6"
    }],
    Powder: [{
        pid: "9da8179fd1fd57bc6490bfa5eb3835e3"
    }, {
        pid: "5155e925770a04fd0be15266348d271a"
    }, {
        pid: "28c399eba712c5d47884441f8faec654"
    }]
}), new Frit('1305.jpg', '1305', 'Sunset Coral', 'F', {
    Fine: [{
        pid: "7514ad47761b356e498afa8792bf004c"
    }, {
        pid: "d7f065ca2bd9340b18f3d4e9968266ee"
    }, {
        pid: "4e947b8f7c917603d650100c89980e37"
    }],
    Medium: [{
        pid: "c569ecf82e7ef6a55ada2b6704da27b2"
    }, {
        pid: "8a4aefad70d724ae12827764af05c5ce"
    }, {
        pid: "83243b0b88f666966ebad1164466cd29"
    }],
    Coarse: [{
        pid: "81b6bf15ddea239e1bf81256cb8fd84d"
    }, {
        pid: "c80dffde303a13e7779179446e052d18"
    }, {
        pid: "643582a8a095cab04f42bb52390b2fe1"
    }],
    Powder: [{
        pid: "9b2c0cf545a09dc163ed0e134fe20743"
    }, {
        pid: "cb98dbe9cabc375b0b39d8c0e84d7477"
    }, {
        pid: "1bd52bda4f5323580152027ce3c0c15d"
    }]
}), new Frit('1311.jpg', '1311', 'Cranberry Pink', 'G', {
    Fine: [{
        pid: "92aa88c42506635203653b0b1b4a3632"
    }, {
        pid: "56be801904c6d6f4a4eea068426aadb2"
    }, {
        pid: "e649e6ee058888abecdd1545db27c2b9"
    }],
    Medium: [{
        pid: "e333ad89b056c96d46e12b56ff070ade"
    }, {
        pid: "269af357b68e4ecbc8799ca5976d4be3"
    }, {
        pid: "a146aee7f42b32549adc83d4faa5c677"
    }],
    Coarse: [{
        pid: "e3a2c252bb2c8076aa6c9dc0e5596f84"
    }, {
        pid: "ddabd2c0e9960d6e4bfe154d633541fe"
    }, {
        pid: "e47e08cb58afac03528619600aa1189d"
    }],
    Powder: [{
        pid: "06340d04fe5cf38214feea5221f918ef"
    }, {
        pid: "6323bd75d0869144debaa9d40f47346d"
    }, {
        pid: "1bf95ede3763a312f8fbabc59e35bd09"
    }]
}), new Frit('1320.jpg', '1320', 'Marigold Yellow', 'C', {
    Fine: [{
        pid: "0e2e438f615ee256dcb51c96b21b0a7c"
    }, {
        pid: "294ed697caa0273ee1ade71541a6625f"
    }, {
        pid: "a15e15bc8d66efc9aa07f6600bedd40d"
    }],
    Medium: [{
        pid: "a00c75abdb46a88a17b65376e8b3a114"
    }, {
        pid: "6c34b098064aee2d1ae9a5bd5651402d"
    }, {
        pid: "ccfc963afe174a03c3966700e6785c26"
    }],
    Coarse: [{
        pid: "e7f35cfda0c7a1c5ff472452147b128d"
    }, {
        pid: "dd922cbba5bfb920eab9b9a08a4adadf"
    }, {
        pid: "57329f164417c25690d9a37a50fbb665"
    }],
    Powder: [{
        pid: "3b70879177f6ba73e87dcdc58d81159d"
    }, {
        pid: "72b11945aec3cbf7ec041f82dc4b0a19"
    }, {
        pid: "1c3a988fe33527edc8977735c7a93b98"
    }]
}), new Frit('1321.jpg', '1321', 'Carnelian', 'F', {
    Fine: [{
        pid: "1648c1c1c474eb921871fe9d01814803"
    }, {
        pid: "b938797c03465934e05558907bede0fa"
    }, {
        pid: "ad7a955b249168d46050c15b94e16d38"
    }],
    Medium: [{
        pid: "9cf082abb92ddab94b62addad096775f"
    }, {
        pid: "d64177b6283235cd94e4dc156c0118fb"
    }, {
        pid: "14bd7605367652027a4045b1cce81a04"
    }],
    Coarse: [{
        pid: "feaff9dff97e1fc7ffa201900743bfb8"
    }, {
        pid: "b971d8cf281427a2a26b471e267f9e47"
    }, {
        pid: "7f8e36596a8435d24cf60a8db5606119"
    }],
    Powder: [{
        pid: "2ba85c67ef4718e211ce3baa64bedcfb"
    }, {
        pid: "5cc857c3920e6a221627e1f9212deca5"
    }, {
        pid: "0bedc71c46fbf8434b45ae861e635dc2"
    }]
}), new Frit('1322.jpg', '1322', 'Garnet Red', 'C', {
    Fine: [{
        pid: "6876b890567408c72b58e734e5458355"
    }, {
        pid: "8dd283bcf413eb3ff2511cbb603b2760"
    }, {
        pid: "3d61027288294f24a7ec8f9c1e81f25b"
    }],
    Medium: [{
        pid: "4eac7676638d70d3fbf658f402a532fe"
    }, {
        pid: "10813e0d33dacd328cdf8b4a8e7911d9"
    }, {
        pid: "55f72a9ad7949c03b651c5ee5e4ab434"
    }],
    Coarse: [{
        pid: "f734628f4079801f011eb7e8aeef1473"
    }, {
        pid: "0cf57f9f3ab91661de196086aac9d322"
    }, {
        pid: "d9f5d94320a7fb1b793f1c9612fca63c"
    }],
    Powder: [{
        pid: "73d1f6be370a6961a14c8e04ee7ed31f"
    }, {
        pid: "454f171c9ff3a2d2f1b0cb1b75005cb5"
    }, {
        pid: "605bfe10bf9113dfaab60f0189cc03c6"
    }]
}), new Frit('1332.jpg', '1332', 'Fuchsia', 'G', {
    Fine: [{
        pid: "ec48452ad21bd481c760fd97329dcfcd"
    }, {
        pid: "beb166a6accaf20332fa11e04a0d178f"
    }, {
        pid: "7f4481a386d4dd14f9ca349cc246ec5d"
    }],
    Medium: [{
        pid: "5a0d61ca27210030fa3b8452d2766244"
    }, {
        pid: "e2d4477808cb7ed58044702d6d495f92"
    }, {
        pid: "9e7c48f06e5a223511f10dd3f19af804"
    }],
    Coarse: [{
        pid: "4469b591c1391606c6fbe7b68723fb4d"
    }, {
        pid: "ad1bde3dc8b667fbd8b6e17483277695"
    }, {
        pid: "eb7c55262a995979331923850c38392d"
    }],
    Powder: [{
        pid: "3ea00000cb7f1f4fef9e60e3c64dd888"
    }, {
        pid: "70f88b84a6ca53b42f97594a131286c2"
    }, {
        pid: "299a615768270cad7355e3467a80ef65"
    }]
}), new Frit('1334.jpg', '1334', 'Gold Purple', 'G', {
    Fine: [{
        pid: "9b22527c96ac09af0e0bbe630af489c4"
    }, {
        pid: "71f1a4142c29547350b219218ea3df65"
    }, {
        pid: "a61e25afe465f8636ec2e2e67ac1926a"
    }],
    Medium: [{
        pid: "c555da476cc979d863d8c5178923f8b3"
    }, {
        pid: "b63bf235a62c03639cda37c2dc55f06a"
    }, {
        pid: "3b0b399c1218c48455338361a1524e91"
    }],
    Coarse: [{
        pid: "12d9ec6d081f910722f5e1ae747e611e"
    }, {
        pid: "0c6bea5bd9ae8e6ecf0ffa0325250091"
    }, {
        pid: "db75b229eb1b656165224432687770f3"
    }],
    Powder: [{
        pid: "69536fc005a1946a24263c4b0460b962"
    }, {
        pid: "a7ede22e9c6932876169a3c554ce06cf"
    }, {
        pid: "75aa9fe7c10739b48bcca4d6ff460936"
    }]
}), new Frit('1401.jpg', '1401', 'Crystal Clear', 'B', {
    Fine: [{
        pid: "b01813ccb7315f803ea280b6b8ae1c0f"
    }, {
        pid: "0ac9f64f326bb6831e42fb3fcf8fe9e0"
    }, {
        pid: "89a18a61d69938eb54e4b88867cf658d"
    }],
    Medium: [{
        pid: "5a9b474d4d96de2f82949c8b5daec3e3"
    }, {
        pid: "96060595e453dda549e9818759633dd5"
    }, {
        pid: "746ea8c5318faa9e69e0fe40da271179"
    }],
    Coarse: [{
        pid: "b8d8760efacafb81e672ab0f7ac27e77"
    }, {
        pid: "21bd7f0f7d4cee1abbecdd2766099190"
    }, {
        pid: "014573c0806e9c3a5a36275c5220b78f"
    }],
    Powder: [{
        pid: "bf7840329f9747d668d1717c7c064d69"
    }, {
        pid: "c4cd1e64dace1b53b01b55ff6810df39"
    }, {
        pid: "95dd0e2424495ac4130a3cf1c20c3e53"
    }]
}), new Frit('1405.jpg', '1405', 'Light Plum', 'B', {
    Fine: [{
        pid: "73acbcf215ddfbb180a9bff3eea51741"
    }, {
        pid: "12a327fb715e9f4ba47d8a005a284c08"
    }, {
        pid: "e5cdb3eaf6f425d4ca8b92e0b7f9b21f"
    }],
    Medium: [{
        pid: "8e4d9ceb8a27e1967337f92b50806368"
    }, {
        pid: "5d0fc620748479caf1e7dbf1c8c57d68"
    }, {
        pid: "e7c2ffeab593cf6b0381089a1dd7621e"
    }],
    Coarse: [{
        pid: "61e5071dc799d50a603cec06fc2b51a6"
    }, {
        pid: "5a506990e48d1647602a9f58b64a3e0a"
    }, {
        pid: "d3b54e3b7ec353abd897a9a9e0e0e6a3"
    }],
    Powder: [{
        pid: "c374c2fd17f2f3e249eb78ba166989f0"
    }, {
        pid: "0d420fb99ab8761057a412056223425c"
    }, {
        pid: "425fc762b42bcdbd4e65dc8b4611cb08"
    }]
}), new Frit('1406.jpg', '1406', 'Steel Blue', 'B', {
    Fine: [{
        pid: "b275713a6293ee2698c203becf6c311f"
    }, {
        pid: "90af7a0e6b3b1c9fb3e3539de9297a14"
    }, {
        pid: "ca103063a01b4d0242bf11f508d6a795"
    }],
    Medium: [{
        pid: "6964e0b21c7921edb2b9e12398c0d56a"
    }, {
        pid: "f9815b904b2c0b9b7c216441266a31fb"
    }, {
        pid: "f4306f183e6d14c762f15c20f10c6ef1"
    }],
    Coarse: [{
        pid: "33297730ef8d5b5a79c7749c1f3c519f"
    }, {
        pid: "812ee09b46a045ab2e98fc06317d28f0"
    }, {
        pid: "bef9ef356a2b876e107d5f9a17c45aba"
    }],
    Powder: [{
        pid: "5fbbf7608ea36c5d464e6eaa060dc715"
    }, {
        pid: "9432959b73ec4521293985be36dc26ed"
    }, {
        pid: "251b8bd656d88c98c917c70b7468993e"
    }]
}), new Frit('1408.jpg', '1408', 'Light Aquamarine Blue', 'B', {
    Fine: [{
        pid: "56b3ca7e7548bf69cfa4128a7be40417"
    }, {
        pid: "00eea01ebb2f8f4c0c7f7de69494305c"
    }, {
        pid: "2e413012ca8fd62f5039353544adf02c"
    }],
    Medium: [{
        pid: "afb8285f52a0cefee707b54329ef9aa4"
    }, {
        pid: "44a259f8913203d888b6035f305c3772"
    }, {
        pid: "fcfd49f03ca162cb2d341a6c2dfc2037"
    }],
    Coarse: [{
        pid: "183c61450dac1ff330079cae6128b0fb"
    }, {
        pid: "0cde56135276125684976398c3d9bf84"
    }, {
        pid: "d14de648eb1ef7a90af7bd7896401ef1"
    }],
    Powder: [{
        pid: "0aad9eefcbdcd0a14b0f64463f2b347e"
    }, {
        pid: "5bbf421149d12175797c4f829d28f59d"
    }, {
        pid: "868f2e2791407ffd9cbea75394f2fed4"
    }]
}), new Frit('1409.jpg', '1409', 'Light Bronze', 'B', {
    Fine: [{
        pid: "c9618b47cf7688092e394949d773d4c2"
    }, {
        pid: "bdb345e3c30b45c1b3cc725a1d7b873f"
    }, {
        pid: "392a79b86b3c2d25b6f28a9bac6b70b2"
    }],
    Medium: [{
        pid: "dac851157f81797d97f6f604f907747f"
    }, {
        pid: "63f062c5fee4f56d199498750dbd2036"
    }, {
        pid: "394954dfb522523e3a323294faea2895"
    }],
    Coarse: [{
        pid: "582ec26ff9dc086e2970b369a4c34062"
    }, {
        pid: "d9457b55dfea36ede36946e827d46f8b"
    }, {
        pid: "88244c1f9c3b3abdb0a1c94eab7a720f"
    }],
    Powder: [{
        pid: "19fcc2b1f679a31076d15cf89f6ae05a"
    }, {
        pid: "89d1e1b8bbf85e9cea7c6a100799a6ec"
    }, {
        pid: "77a7969f6bd69df1604249ac3e679807"
    }]
}), new Frit('1412.jpg', '1412', 'Light Aventurine Green', 'B', {
    Fine: [{
        pid: "fb5fc893c9706a63e6dd0fb63e8efaf9"
    }, {
        pid: "9078a0df4a3005bdadc1b22c71576b7b"
    }, {
        pid: "5ae35d75f38e4067245f5fd96655d2e6"
    }],
    Medium: [{
        pid: "78ff7c554b58c20adf72f42a35992473"
    }, {
        pid: "872425f5776f60ab6c1b17ddbb027144"
    }, {
        pid: "d42f2c49ed3d72dbce650d12257789c9"
    }],
    Coarse: [{
        pid: "ba82d3d1202ea9f8f75347b612d62c67"
    }, {
        pid: "c8adb5b6813edd70ff94d0b152375196"
    }, {
        pid: "07bb32fe9d3f00500a9659647c3e2cb6"
    }],
    Powder: [{
        pid: "deb604e5a12309935c3948c08218394d"
    }, {
        pid: "8fa2adff2bf6a4c94ff9106b7ea980aa"
    }, {
        pid: "46f428e1e3722e27561f6e7d86bf0f54"
    }]
}), new Frit('1414.jpg', '1414', 'Light Sky Blue', 'B', {
    Fine: [{
        pid: "99bc624c246e680e1930b3a609288457"
    }, {
        pid: "4963c6f0774e42079ef173c89c6a2dcd"
    }, {
        pid: "359c1078c71c4bf4bfc93e59aa914539"
    }],
    Medium: [{
        pid: "6aad812a89c11fb07b4d767e837803bc"
    }, {
        pid: "17ccfb0b0c1695d245b4e7cf09cd9021"
    }, {
        pid: "d4f2e940781f869593c95a220edc8ff4"
    }],
    Coarse: [{
        pid: "360b8a982f03e22720d02cc8af1cc1ae"
    }, {
        pid: "3554973280f9d3002dd50c3a80b166cd"
    }, {
        pid: "5f22734d7222feabb20122ff4e6de876"
    }],
    Powder: [{
        pid: "00893d9d1227e166f450f055294f57bc"
    }, {
        pid: "2204d3420d94c882a5026c5da952dc4a"
    }, {
        pid: "64c9a20ed867bb14805c560d03e50545"
    }]
}), new Frit('1416.jpg', '1416', 'Light Turquoise Blue', 'B', {
    Fine: [{
        pid: "8633cb5d2d844e9ab5820e049735b745"
    }, {
        pid: "58ef5b98337b4d71a0cd33d1478dbd2d"
    }, {
        pid: "0566bb66c11141fda4856dd7c7b0d002"
    }],
    Medium: [{
        pid: "479487e54720443892209aa42944a00e"
    }, {
        pid: "e3007c95242040d8bb89b2b1743b22bc"
    }, {
        pid: "925eaaa450a349b29e4d7d66214ea729"
    }],
    Coarse: [{
        pid: "1294bf5312bc4b34b5f3d542e191a648"
    }, {
        pid: "92274d5a8fbd446ab4c95c294ecb7521"
    }, {
        pid: "b8d13104c3694b499e30dcf680928a65"
    }],
    Powder: [{
        pid: "245a18cf0ed14729892409c926e7e5d3"
    }, {
        pid: "e47145f972e24af68aa84857b75d741e"
    }, {
        pid: "79e03c22786c4272a87b223e94e548a1"
    }]
}), new Frit('1417.jpg', '1417', 'Emerald Green', 'B', {
    Fine: [{
        pid: "512068a2e8c373012419e6fab8d4fb56"
    }, {
        pid: "5f73c1a7fe47fc95d7eed0ef957c3533"
    }, {
        pid: "71842948453e376eadf20d078f5f4a79"
    }],
    Medium: [{
        pid: "958cfdedf3c50033f8817a9c261d44ab"
    }, {
        pid: "a297a28eb3055821e586726b35191d55"
    }, {
        pid: "b1cbc2846eef41a9b609306ea16e27a9"
    }],
    Coarse: [{
        pid: "d61f7503e6381e638e22b7c984e16dcd"
    }, {
        pid: "b844e21a148aed11afdd046200b10e4e"
    }, {
        pid: "60370ca32f5e4db569180c8f166bc7c0"
    }],
    Powder: [{
        pid: "49acc970f81e29bd6338502ea1f09beb"
    }, {
        pid: "b9834d9222dc0d04cb49ca3206b6efcc"
    }, {
        pid: "1cc90dfb1204c0f7e939a8cb1a010351"
    }]
}), new Frit('1419.jpg', '1419', 'Tan', 'C', {
    Fine: [{
        pid: "0d9a6c13d22b4c86a7a559b4fee89620"
    }, {
        pid: "30677cfec52a4c60ba1e1571c7899559"
    }, {
        pid: "3f2d5592dc4a457a8877a7587965c459"
    }],
    Medium: [{
        pid: "c558803ca2424b4ca021754a6e52b962"
    }, {
        pid: "2acbca228e3a48ab8e0bd99125542a08"
    }, {
        pid: "c1a281d5d8444ffbbb29d32b5e7bb892"
    }],
    Coarse: [{
        pid: "261fa29876d44ce9afe86a66d80a12ae"
    }, {
        pid: "58407d0e353a434f867cf88e86d099dc"
    }, {
        pid: "4c03e5f9168c44468b5fad70c658eedd"
    }],
    Powder: [{
        pid: "99b5af66a54642829451a075a89ddb34"
    }, {
        pid: "954825c9752b4fab89bdb1d322f6ce0f"
    }, {
        pid: "6a7d684e4f4c4127a29c2303da248d32"
    }]
}), new Frit('1428.jpg', '1428', 'Light Violet', 'B', {
    Fine: [{
        pid: "c7a1e25c7241d7237a2e12bf5d01dfa6"
    }, {
        pid: "563429dc1f7924a6cd79e79064f3cd64"
    }, {
        pid: "3c96b4dbce0cde54c81b1f7445cdfa4d"
    }],
    Medium: [{
        pid: "21cd0c1e10ac90a988fb3a3467953587"
    }, {
        pid: "949f6cf496fc008145fa658f6b8eeabb"
    }, {
        pid: "6218162f9619211d1b260d8b2048ac48"
    }],
    Coarse: [{
        pid: "e6c17682b8dba0ae0926986068836e6d"
    }, {
        pid: "d069d1f9579c39bbd8fb8ceb85778bb3"
    }, {
        pid: "db6170e772f8ef0ca8a048a62bee6a7f"
    }],
    Powder: [{
        pid: "60692612627a2da41b909fb137f186d4"
    }, {
        pid: "27e3b9938394a1f8c2c8da1fe8c19adf"
    }, {
        pid: "2b5ab18c82110988e37a37ed9dda8cab"
    }]
}), new Frit('1429.jpg', '1429', 'Light Silver Gray', 'B', {
    Fine: [{
        pid: "636a2a40b55f23da26eb913791355ffd"
    }, {
        pid: "e5d19b005ee8f80d8e2d2f5990a6dffd"
    }, {
        pid: "a7a048ad3a16cc03e5be7bf28aa705ff"
    }],
    Medium: [{
        pid: "95ae541b6fa3e38700d60343aeaacc7c"
    }, {
        pid: "d5a86d56f29febd03b5ca1431a6150ee"
    }, {
        pid: "fb235e1931ec05e32fb2f9e7bf140b00"
    }],
    Coarse: [{
        pid: "11476756a62940f1b856a878c93787e1"
    }, {
        pid: "32eee6b7d01ee05ab79fb1d872f00b60"
    }, {
        pid: "49153c8bbc5f2fed581f4ae6e2e832a1"
    }],
    Powder: [{
        pid: "5956144bb1ecb54b870eb34e98eb2d65"
    }, {
        pid: "4a925c94ef490c0edc20c640e0136eda"
    }, {
        pid: "97155bbf82763ea74c961766c3beb874"
    }]
}), new Frit('1437.jpg', '1437', 'Light Amber', 'B', {
    Fine: [{
        pid: "c678e79fb1cb929357fa33e70b264a0e"
    }, {
        pid: "43772f9da54e17c109ed722b4184c215"
    }, {
        pid: "39c3c95f00a251141646d9956a67b02b"
    }],
    Medium: [{
        pid: "f2f729dea0d50857f02b52e2819e3496"
    }, {
        pid: "72f202371fba4a899827f4320845fabf"
    }, {
        pid: "5adf535c4cc3921e6a8abb54af2a1aaa"
    }],
    Coarse: [{
        pid: "2ab2faffde6c83af5c017afac0d648ca"
    }, {
        pid: "a8c53e630772c8e5b9c10526983bfca2"
    }, {
        pid: "08e7bf38744dbf725309ddfe1f43bb72"
    }],
    Powder: [{
        pid: "768d2e512c3e224badd142a4d048baa6"
    }, {
        pid: "8f01da8bea6d058b1ad634cbe354e792"
    }, {
        pid: "ca2a287d68471a373fc123f079309ef5"
    }]
}), new Frit('1442.jpg', '1442', 'Neo-Lavender', 'E', {
    Fine: [{
        pid: "304ab404cbd8f9105311b22b29aac17d"
    }, {
        pid: "8bebbd471fedc192f6c744a8a20ca2e9"
    }, {
        pid: "78d0d0d7d178acf2a20411ed7b60a6b7"
    }],
    Medium: [{
        pid: "bf7c04490d7569f3473cee9ad077de58"
    }, {
        pid: "51a2a0afc6e7912c3df7cdb5e49f89c1"
    }, {
        pid: "bbe4d0b75c7da0e2261cc3707fc887ea"
    }],
    Coarse: [{
        pid: "4a6bb33e60694cbd63838851e546c366"
    }, {
        pid: "fe22837489ee5e3de94d09749e4eed8d"
    }, {
        pid: "b74fa8661885c3b8c80c34206321e503"
    }],
    Powder: [{
        pid: "4ba963df927e8aee503bf60033129fb4"
    }, {
        pid: "274d1c782d9ba7d0b25ab72ce22ec8b1"
    }, {
        pid: "d5be22de0f5640e78586bb635134b8e0"
    }]
}), new Frit('1449.jpg', '1449', 'Oregon Gray', 'B', {
    Fine: [{
        pid: "e60fa8f015d206a43f26613c2aae000c"
    }, {
        pid: "b9c51e1a7664b82e237d2df7598e5775"
    }, {
        pid: "5ad3595b0a9721bac31eb3467e011ba3"
    }],
    Medium: [{
        pid: "35edbeaa7ed022ee259bce998e86bf4e"
    }, {
        pid: "b1ac22f8140c64cad37208637b85a3f6"
    }, {
        pid: "00ee2861309b3c3e2551d1668b3c5848"
    }],
    Coarse: [{
        pid: "c55cd429d5526f88fec3faefa73d02a2"
    }, {
        pid: "4567a947ec149b394be5983f805347bb"
    }, {
        pid: "1e1343c3a0ec28d960578600f042293b"
    }],
    Powder: [{
        pid: "9d85fa6169edb73621668beada79fa96"
    }, {
        pid: "8024b76b1574a96984aff251cab57943"
    }, {
        pid: "4b8ed1b6b4b35c37027e4b8c614be5db"
    }]
}), new Frit('1464.jpg', '1464', 'True Blue', 'B', {
    Fine: [{
        pid: "e6bb5745109fb2e32d1e4322aa9e1224"
    }, {
        pid: "d6ef5962eaab07c8be641ceaaaa43ca5"
    }, {
        pid: "282da24d4863025795aad5a371f614d5"
    }],
    Medium: [{
        pid: "795f6384c94118975e0f8f24ec9f30f5"
    }, {
        pid: "f3905c8d67783b466bc7ad96c567e779"
    }, {
        pid: "2767a9082d7148c7da45942ef4fb1ce9"
    }],
    Coarse: [{
        pid: "dc6191c513a26c2716965c71d1e4d88c"
    }, {
        pid: "c59a03221c2f7b9ac5c452d0f3039c67"
    }, {
        pid: "a7962ae30144b8783bb2d9740903e03e"
    }],
    Powder: [{
        pid: "8d695c3bf190359e8f9ace3da1e2234e"
    }, {
        pid: "3976523c47ca24488a2a3edc871045f0"
    }, {
        pid: "413c63754102a5eb49ec017dbbb4b0e5"
    }]
})];

var tints = [new Frit('1806.jpg', '1806', 'Juniper Blue', 'B', {
    Fine: [{
        pid: "ccfa5f0ecccdbe9917c3371583f7fc37"
    }, {
        pid: "65c8827d39bd8d6bb65a32de6aee6f71"
    }, {
        pid: "d5f4156484708911b83330d7684fbef7"
    }],
    Medium: [{
        pid: "c9ac97db5597841cf07afd6c900580ac"
    }, {
        pid: "e3e1adead6b1faeba03d174133192093"
    }, {
        pid: "dec37be03e4889e3ed3e6dd2299c0790"
    }],
    Coarse: [{
        pid: "820b1b8d808f9b2540ed6254507d1047"
    }, {
        pid: "e98c0f86f51cf64ae5f5bf56d0e8b4fe"
    }, {
        pid: "46390492f46b5fca094515260655e5ee"
    }],
    Powder: [{
        pid: "7599b0fb71111f21a858604e39f0a520"
    }, {
        pid: "a72c78f008ba34f39d7c420f0d838e07"
    }, {
        pid: "d221761665864b654a0263cc8f80e1e1"
    }]
}), new Frit('1807.jpg', '1807', 'Grass Green', 'B', {
    Fine: [{
        pid: "882f46edbb1fc47bd692e4506e741495"
    }, {
        pid: "26e2e448d31c31849ac283dd7ea228e1"
    }, {
        pid: "da6e6d46f77c08ac1f6ec81115f12d88"
    }],
    Medium: [{
        pid: "dbac5d6e945ca0c34366c5114ba9299b"
    }, {
        pid: "aa16dc21dc6449fb1062ea57a7e32f47"
    }, {
        pid: "c66364f7975f0b8c2efbe91c40f1dae4"
    }],
    Coarse: [{
        pid: "be0a606eb119458a25b1eb47fa76a0a9"
    }, {
        pid: "b9f76da2250692e9fb3bbe5a9bf4c03f"
    }, {
        pid: "0cb166032a2303a265401093586ce275"
    }],
    Powder: [{
        pid: "36fb119836fe21e2cbd39e659996af2a"
    }, {
        pid: "754795d237c0a1ba1677caba035f9095"
    }, {
        pid: "5fa774aad56b2f77371c13b14d54c630"
    }]
}), new Frit('1808.jpg', '1808', 'Aqua Blue', 'C', {
    Fine: [{
        pid: "c2c676c96add985fad753f3cca333abb"
    }, {
        pid: "d57c7c1f3a37954b07c1e68a7778588d"
    }, {
        pid: "83051ba5e07fdda346bc388889784af9"
    }],
    Medium: [{
        pid: "405622c6fe80ff78b4520d77554d78e9"
    }, {
        pid: "38c535c5857396690271395fd1d0cbee"
    }, {
        pid: "bbda5c94a4d78683c7c3cad5d105876a"
    }],
    Coarse: [{
        pid: "9adb06c6758d1ca797126266f886e1ce"
    }, {
        pid: "8cf08e58177d00fa4b9af54cbbad2f0b"
    }, {
        pid: "0b1ca59db2358b9f9a7cf95f219924b9"
    }],
    Powder: [{
        pid: "4d770e599bac168d8daeb47b4fc0896a"
    }, {
        pid: "3cd7eb7f5891fb6539f7de58d14ef12f"
    }, {
        pid: "8cf697a24e4c4e4d3c1f0c882ab15fe1"
    }]
}), new Frit('1818.jpg', '1818', 'Indigo Tint', 'C', {
    Fine: [{
        pid: "a2bd9f34b78f0f9675db5b0a9ca9249c"
    }, {
        pid: "57f327f70d3c1e84a16d67680c118b42"
    }, {
        pid: "0f775bb343f59a82dac5811f72fbc84b"
    }],
    Medium: [{
        pid: "58ca1a8e910ae6b4040cb1cf6c56d8a1"
    }, {
        pid: "a2455d75a29cf929bea86d1ad7c69600"
    }, {
        pid: "7e2faa02623940c9492117bf0bdae17d"
    }],
    Coarse: [{
        pid: "1756bc7914c44f5ee4f71cfba31e44cd"
    }, {
        pid: "348dc331322f4d60cdcf44ddfcc26365"
    }, {
        pid: "deab2b5acb195cdfe1d7d0602e49133c"
    }],
    Powder: [{
        pid: "f5c14f916fa25b7a33f85a4543eb94a1"
    }, {
        pid: "87fde4aa3ce2009460d47b19b9b903d7"
    }, {
        pid: "d0502245548b0b03278fd5dbd645d4d4"
    }]
}, {
    Coarse: false,
}), new Frit('1820.jpg', '1820', 'Pale Yellow', 'D', {
    Fine: [{
        pid: "009cf6e2822d4baaa75b1bd716765389"
    }, {
        pid: "f81b59a484f243f3410c146c371abd1f"
    }, {
        pid: "0fadf51053b19bda5bcdd64f73597a9d"
    }],
    Medium: [{
        pid: "9a6929075bebdd5fdea5566b7f6e6c37"
    }, {
        pid: "fad355db01bd893d870eb8b52278e462"
    }, {
        pid: "986da4dcd5f6c5825c5de7e62502a447"
    }],
    Coarse: [{
        pid: "9e93b73d3ff3557d6391a4c048b083f4"
    }, {
        pid: "5643ff26dcd8ceeab33f6443f778080c"
    }, {
        pid: "7f1a8489264524e0b9656ed540f4c8e4"
    }],
    Powder: [{
        pid: "508a35b1364f13fd4d67745982c652ef"
    }, {
        pid: "b738908574fa948125d6a07257c23a86"
    }, {
        pid: "ed0d2048dd131a5cc09a2742967509ad"
    }]
}), new Frit('1821.jpg', '1821', 'Erbium Pink', 'F', {
    Fine: [{
        pid: "3230a763cb486d3b1650d8c05644d41d"
    }, {
        pid: "2184405be27099a05370f6527d5b3105"
    }, {
        pid: "8e93833c6a8e103ce53cd8d30f1c973e"
    }],
    Medium: [{
        pid: "fbc66cb3432bbed8a7e1a40920bff2c6"
    }, {
        pid: "5cb4abaf2fdbe01e7bc4fe8332e7e9da"
    }, {
        pid: "e589e46e1f47117bb11f25d7c179d2b5"
    }],
    Coarse: [{
        pid: "17ccc8fc23e953ef27db4e47c9638645"
    }, {
        pid: "b75cf5e76a54e49b2fec55f44def754e"
    }, {
        pid: "2532915aabeca9316ba162e711803d51"
    }],
    Powder: [{
        pid: "48be07ea07e67932577025d6c31e11b5"
    }, {
        pid: "87e4b912141bfa33e3d3cc1f14f8f641"
    }, {
        pid: "c134a7fe6d6793dc16a2e531b3e4b7f2"
    }]
}), new Frit('1823.jpg', '1823', 'Burnt Scarlet', 'F', {
    Fine: [{
        pid: "4f60b3de4d234b1fa3b337de5d90d563"
    }, {
        pid: "a590d9854eb04897bf057629dda73833"
    }, {
        pid: "dc3ef67ad7ce4683895868d796ee9f87"
    }],
    Medium: [{
        pid: "c0f8887151ef4453b4951d1a72001d69"
    }, {
        pid: "bc5df730780947a69c89707fa4503a1b"
    }, {
        pid: "238fafbfef5c4091910024f056d5aab3"
    }],
    Coarse: [{
        pid: "fd11fd00ae76463e9e11caa2355d013b"
    }, {
        pid: "72c600570b4043fcb0499d714a935307"
    }, {
        pid: "f97c2d5cb4c342f9bed79cc7af104d99"
    }],
    Powder: [{
        pid: "4506d3ca0a994b78b21fee84ac93ede9"
    }, {
        pid: "d68844c164514ac7b8b59dbcabdbdfc0"
    }, {
        pid: "84fa8bbf108742dca6d1f9b6b2b17c05"
    }]
}), new Frit('1824.jpg', '1824', 'Ruby Red Tint Striker', 'F', {
    Fine: [{
        pid: "5268b8bc38f841f883e4359959ce0e8b"
    }, {
        pid: "11af399a10e3430da866227d1b5771cc"
    }, {
        pid: "1bff306a3edc48de82fbba8f9b1bf545"
    }],
    Medium: [{
        pid: "6143f95a90694fd39b164239b645d158"
    }, {
        pid: "9791abbeae2443f59fe348d29a1accc2"
    }, {
        pid: "5877b03f1adf4326a9a898cf5f660679"
    }],
    Coarse: [{
        pid: "42d02ed7ebf34921ba6fb1fc7e859102"
    }, {
        pid: "aebf5d29cd904b40b3cbac87cc7e0390"
    }, {
        pid: "cd3bc6eecc7b42fa85addd15c77d2fb5"
    }],
    Powder: [{
        pid: "77dec6d066d04187abb38e33b3297bd2"
    }, {
        pid: "5f2638e321724c78adebf1d738a3202f"
    }, {
        pid: "6c824557a6c840d6bec83167efdf76b3"
    }]
}), new Frit('1826.jpg', '1826', 'Green Tea Tint', 'C', {
    Fine: [{
        pid: "ba1aa052dfb243eba4c9d77d930affe1"
    }, {
        pid: "2293f524793741e1af93ade7f8353f41"
    }, {
        pid: "83aefef3dcc24c59b563eb97cececfc1"
    }],
    Medium: [{
        pid: "df6441547e5e41f58f5e276e75321871"
    }, {
        pid: "9313cf04012240d9a32cc309b871dff6"
    }, {
        pid: "0f1e78ba6f484e58b1e2019d9d296c05"
    }],
    Coarse: [{
        pid: "f3affc9a97714203980ce24272be44da"
    }, {
        pid: "e25b49fbf7954313bbe4f8b8d1cb5b75"
    }, {
        pid: "8efd9f8a64834c1195593c1a1800c000"
    }],
    Powder: [{
        pid: "5fdd184e60ef47c8b713f0fbb2ab5bf5"
    }, {
        pid: "963fed624ded4bd3b9fa7816917c8be8"
    }, {
        pid: "94e57522984f40f195fee88767a12a0c"
    }]
}), new Frit('1827.jpg', '1827', 'Light Amber Tint', 'C', {
    Fine: [{
        pid: "bd5a808280c14261912773688b54328a"
    }, {
        pid: "7e8d4eef90334612a216eddc3460e8fd"
    }, {
        pid: "86e95503a23f4814b8811ceffe88b152"
    }],
    Medium: [{
        pid: "6d2b2b173d9e4047abce017725797b4c"
    }, {
        pid: "2676dd775f924d9287a9d154bb8b7191"
    }, {
        pid: "2db09e85c3f140c4814209c34578c106"
    }],
    Coarse: [{
        pid: "c3cc5b32a2c64188bc7b91aa55d4d2d3"
    }, {
        pid: "62589ee5fafd474ba098c17f70fd96e0"
    }, {
        pid: "3cdbbc83af6249a696de3614ffc480c5"
    }],
    Powder: [{
        pid: "ecad3661ae524d20a8a5d7283e4fffc4"
    }, {
        pid: "d86655cd771149cabf5485caff1e3f06"
    }, {
        pid: "326e00dab51846748bf17d1b7863bbdc"
    }]
}, {
    Coarse: false,
}), new Frit('1829.jpg', '1829', 'Gray Tint', 'C', {
    Fine: [{
        pid: "c884684c174a62f72833d2f0c1725feb"
    }, {
        pid: "4dc4dad0d9fa52d53e410dbef63dc90f"
    }, {
        pid: "827536a39d8b0b50bd01f1dcc6c699bd"
    }],
    Medium: [{
        pid: "039dee1c99f024bb21ac562627580c57"
    }, {
        pid: "c0566bc1814e21a2c8286a146a62bd5f"
    }, {
        pid: "132e86a97bb6d648ed4d0afffaf81d87"
    }],
    Coarse: [{
        pid: "ef55bf2c6afbed1a955d50b334af9a2d"
    }, {
        pid: "ea95a9241f0e507a2fab8ad3f4abfce7"
    }, {
        pid: "621ab93bba40a61d727b41b0cfe02fb3"
    }],
    Powder: [{
        pid: "d282a10d80ccd25627cee6a318fd949d"
    }, {
        pid: "455452b92c4f9bdd9ae856c75df706de"
    }, {
        pid: "49fbb03b769d104c904cc4c53e2f2155"
    }]
}, [{
    size: 'Fine',
    vol: 0
}, {
    size: 'Fine',
    vol: 1
}, {
    size: 'Medium',
    vol: 0
}, {
    size: 'Medium',
    vol: 1
}, {
    size: 'Powder',
    vol: 0
}, {
    size: 'Powder',
    vol: 1
}]), new Frit('1831.jpg', '1831', 'Ruby Pink Tint Striker', 'F', {
    Fine: [{
        pid: "9199b14bd34c445cade7c55f8294f3e2"
    }, {
        pid: "bfb06c10c2c3452d9f33412115e351b6"
    }, {
        pid: "e214532b2e4d400cad6d95d4f5c29ca9"
    }],
    Medium: [{
        pid: "b23544bcc34244468f592295b68c652c"
    }, {
        pid: "1fa2d61f6926477883b456b41af24150"
    }, {
        pid: "fac9c26da87e4233971f22fb1724a108"
    }],
    Coarse: [{
        pid: "b892f518760b406a9e6064f6aeb5d579"
    }, {
        pid: "3521283411bc401c933e9888f101fd05"
    }, {
        pid: "0e05b35fb5b34ed8804a8ae72cdd785c"
    }],
    Powder: [{
        pid: "b8a35960d5bf48de88bbc9a972f3e761"
    }, {
        pid: "aaf844759cb34f68a016a715c2ba9be8"
    }, {
        pid: "ed0892f3df464486b260e4cdfec44ffa"
    }]
}, [{
    size: 'Fine',
    vol: 0
}, {
    size: 'Fine',
    vol: 1
}, {
    size: 'Coarse',
    vol: 1
}, {
    size: 'Coarse',
    vol: 0
}, {
    size: 'Coarse',
    vol: 2
}], 'all'), new Frit('1834.jpg', '1834', 'Coaral Orange', 'D', {
    Fine: [{
        pid: "d44a928ad8d33a7360fc5a30317c95f3"
    }, {
        pid: "7e27460f15f3caeee5be6ae8f32a096c"
    }, {
        pid: "3b88f8a103ae8c052583ca60deb303d7"
    }],
    Medium: [{
        pid: "6f375a6092753b230d3265884b505b81"
    }, {
        pid: "f1a31c674c165b410352a6bc27aa634b"
    }, {
        pid: "7609439a76dc56bf20de3dc5c410c29f"
    }],
    Coarse: [{
        pid: "a053c7a31727db0f9de6c2e85f3152e6"
    }, {
        pid: "a7b2cee0e05d591b1bb03ee60a9739ba"
    }, {
        pid: "73655338c44f2b5550471beeac574d14"
    }],
    Powder: [{
        pid: "799ec2df1f28dd8aeb4af3b33d70129c"
    }, {
        pid: "93f884182323ee519c497cad2aca6e87"
    }, {
        pid: "e744bf6e783acbe9cca288026b326032"
    }]
}), new Frit('1837.jpg', '1837', 'Medium Amber Tint', 'C', {
    Fine: [{
        pid: "34dba9a594de42d9a14b054b7a8f5a18"
    }, {
        pid: "297efd3e79144c7f948d1143376b1e9b"
    }, {
        pid: "fc6514088136466aac972075d1ff6749"
    }],
    Medium: [{
        pid: "e77ff12342564aeab470426922be15df"
    }, {
        pid: "f79cefbcaafb493ea856f74ee568486f"
    }, {
        pid: "b1ed719e067e4e499cf783f3cb6cb48e"
    }],
    Coarse: [{
        pid: "856d6a80b9314bafbbd9859786fc099e"
    }, {
        pid: "66adf93416104cc4adc971f53b9c3e35"
    }, {
        pid: "346b833f8ab0489ba0ee28009537d80f"
    }],
    Powder: [{
        pid: "76362c5c12ba4d05828b52ddbe264557"
    }, {
        pid: "cb48b011812845ddaaf42b29162bb82b"
    }, {
        pid: "a38742f8b65c4db5b8c8fb5f3d0b33f7"
    }]
}), new Frit('1838.jpg', '1838', 'Dark Amber Tint', 'C', {
    Fine: [{
        pid: "3950dea18bfa47329f778f541002476b"
    }, {
        pid: "d7430274f88b43cbb94486ae86c3d6f9"
    }, {
        pid: "397db6d72d684a9a8f34c54402cec5be"
    }],
    Medium: [{
        pid: "14cb40e9a9aa413e89f84b21ee3f0814"
    }, {
        pid: "16ccc3aaed774291bcf4ff14aff52659"
    }, {
        pid: "dcaa2c7372384f5f8af16efe78895c64"
    }],
    Coarse: [{
        pid: "45105de21a5e4ef9961bdaf0830aa863"
    }, {
        pid: "5f2b1c7953de46eab8761413a827f19e"
    }, {
        pid: "bb738ee212984a7386b6aae03fb183cc"
    }],
    Powder: [{
        pid: "66c604d8eed8471a918c5519b3e12d43"
    }, {
        pid: "45d58def848241718dccb56315af2757"
    }, {
        pid: "f9666672eb354c42b69972900e900567"
    }]
}, [{
    size: 'Fine',
    vol: 0
}, {
    size: 'Fine',
    vol: 1
}, {
    size: 'Medium',
    vol: 0
}, {
    size: 'Medium',
    vol: 1
}, {
    size: 'Coarse',
    vol: 0
}, {
    size: 'Coarse',
    vol: 1
}]), new Frit('1841.jpg', '1841', 'Spruce Green', 'B', {
    Fine: [{
        pid: "ebfb959e00b168ea5a709d9f1b6975ae"
    }, {
        pid: "48e231bf0d45e798a85220c7d30486c0"
    }, {
        pid: "6ecdfbbe5e3d133d898c698dd0cd9420"
    }],
    Medium: [{
        pid: "c41e346945419ab94fe9b54223b62e00"
    }, {
        pid: "b94b0b7b1b86608c140ff89ad15c517d"
    }, {
        pid: "ca97e54d594c320c3639b65af93fc1bb"
    }],
    Coarse: [{
        pid: "45105de21a5e4ef9961bdaf0830aa863"
    }, {
        pid: "5f2b1c7953de46eab8761413a827f19e"
    }, {
        pid: "bb738ee212984a7386b6aae03fb183cc"
    }],
    Powder: [{
        pid: "9381be3295771dd218dc9d95a9621d54"
    }, {
        pid: "f049fd60f9ec8083d2fc51c736c6b565"
    }, {
        pid: "bbcfdc122a8b3bb7c1bf515caa27d44d"
    }]
}, [{
    size: 'Coarse',
    vol: 0
}, {
    size: 'Coarse',
    vol: 1
}]), new Frit('1842.jpg', '1842', 'Neo-Lavender Shift', 'E', {
    Fine: [{
        pid: "461a26533228134069ade03fd149bde1"
    }, {
        pid: "4ae3c7b24ecc6dba8b52d2ee85b12ba7"
    }, {
        pid: "2f2dee0d14103cf871a9c2b9904e679b"
    }],
    Medium: [{
        pid: "52749027305205129cabb94e8a89e4aa"
    }, {
        pid: "7d9ed0e2fd6bc2a2e7627e03f8e7b3de"
    }, {
        pid: "2c8c77c72b0c6306592e1466a598143e"
    }],
    Coarse: [{
        pid: "2be920f1bdf4bb4d399ca68ec9605e48"
    }, {
        pid: "1eecd11be6a9b8e5e0f200c50d891e62"
    }, {
        pid: "0826794946929a6026f696d2d0421ee4"
    }],
    Powder: [{
        pid: "0b5c47f1d8833395eb22e502db4221c2"
    }, {
        pid: "94a2b9667e694cab22c4070c81a12224"
    }, {
        pid: "d3ab7c1b9a9236acca3f3edc595bf4a2"
    }]
}, [{
    size: 'Coarse',
    vol: 0
}, {
    size: 'Coarse',
    vol: 1
}]), new Frit('1859.jpg', '1859', 'Rhubarb Pink/Green Shift', 'F', {
    Fine: [{
        pid: "4b8a109dcaaff93e24cab128833f7e4c"
    }, {
        pid: "702a17cfee2ab428c376a83ce36f1210"
    }, {
        pid: "579ebfbd530c99bca188dd815566860f"
    }],
    Medium: [{
        pid: "fe52e3e51ed87822f179901ac6832ee5"
    }, {
        pid: "d08ad39b2ccdfe1c3740be800f688f82"
    }, {
        pid: "979038e8d7abc3518a131e87f625a735"
    }],
    Coarse: [{
        pid: "e810770bf45df6e070c3a087367dfe74"
    }, {
        pid: "04a5c2c548c7728cdca48d658d34d1ca"
    }, {
        pid: "9124d1faafb3bc928341129806aa2ba4"
    }],
    Powder: [{
        pid: "f00ad6179ad4e5a43a8b6713ca269c12"
    }, {
        pid: "6de44b7999c03be89c5ebc177586a3b9"
    }, {
        pid: "daa3adcdef2cd659d781699ae2bd5e3e"
    }]
}, [{
    size: 'Coarse',
    vol: 0
}, {
    size: 'Coarse',
    vol: 1
}]), new Frit('1864.jpg', '1864', 'Gray Blue Tint', 'C', {
    Fine: [{
        pid: "ed774d9598ce4105be3c5c320b518683"
    }, {
        pid: "4b21a2bd4426449ab509e31716118f5c"
    }, {
        pid: "4d8eec1a183e4ffdb55e78ea7796d505"
    }],
    Medium: [{
        pid: "e6005ff26323454aa32814d4017b75e1"
    }, {
        pid: "c90458b88bd9458db2718848b9d12379"
    }, {
        pid: "af05f4e351094334b75b3d89851aa5bc"
    }],
    Coarse: [{
        pid: "63e34e1351814dc4b9686415ee999e1a"
    }, {
        pid: "2f0ee097df8640e7afbcb9ae3fed5602"
    }, {
        pid: "7feea6cdc3a745d49a72d4136fe779b6"
    }],
    Powder: [{
        pid: "08b173f32de746b7987f3770ddad3d40"
    }, {
        pid: "639a86c02bb14ff0b963463ca5739d49"
    }, {
        pid: "a68c66d210f745c6b969920cb1c2b20c"
    }]
}, [{
    size: 'Coarse',
    vol: 0
}, {
    size: 'Coarse',
    vol: 1
}, {
    size: 'Powder',
    vol: 0
}, {
    size: 'Powder',
    vol: 1
}]), new Frit('1867.jpg', '1867', 'Olive Smoke Tint', 'C', {
    Fine: [{
        pid: "f7e766af51fe4d61beb2f2f9fe173d8a"
    }, {
        pid: "b3ce5a8972794bc8bac2800541509cf6"
    }, {
        pid: "b3b7546e3f6b41e8b59677c163c3e4e6"
    }],
    Medium: [{
        pid: "58f77cceb4814d0ab17c37eaab547f89"
    }, {
        pid: "fda90fa97c6942e698e14e5e13154580"
    }, {
        pid: "c0dea840727f4e5fb6e332fd8e502fc4"
    }],
    Coarse: [{
        pid: "96eb031a707449dab67b5aaa04387e35"
    }, {
        pid: "4210af5111784f959f6e9754864ea224"
    }, {
        pid: "bc3f1f20ce4d4fa691adf9b3771e2cbb"
    }],
    Powder: [{
        pid: "94d1b424fc6b4c8dbd89a31bdc83e6bd"
    }, {
        pid: "de7dbdaaa0d64c19879d60ffca198df9"
    }, {
        pid: "3d5343b3e9ed48de9dfef0a7be547656"
    }]
}, [{
    size: 'Medium',
    vol: 0
}, {
    size: 'Medium',
    vol: 1
}, {
    size: 'Medium',
    vol: 2
}, {
    size: 'Coarse',
    vol: 0
}, {
    size: 'Coarse',
    vol: 1
}, {
    size: 'Coarse',
    vol: 2
}])];

opaque.sort(function(a, b) {
    return a.number - b.number;
});

transparent.sort(function(a, b) {
    return a.number - b.number;
});

tints.sort(function(a, b) {
    return a.number - b.number;
});