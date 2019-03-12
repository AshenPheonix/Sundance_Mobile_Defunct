<?php
include_once CLASSROOT.'effetreClass.php';

$trans=[
    new EffetreGlass('T0040405','Clear 4-5mm','t004.jpg',16,["507e4629f4644d1abdfd1285391ececc","6058ff6b55564ab59b12ee16b32aabab",],null),
    new EffetreGlass('T0040506','Clear 5-6mm','t004.jpg',16,["82c9755948354213b653893107f89a17","ae75c3c016b544d28bf3f7e505112021"],false),
    new EffetreGlass('T0040809','Clear 8-9mm','t004.jpg',16,["74afa5391396424cbcddd86db867c44b","d29b392be4334f48954789860ab08d8b"],true),
    new EffetreGlass('T0041011','Clear 10-11mm','t004.jpg',16,["781260c40f4545c08b39999b73a3f109","1773ee85e2244ddda47c84994f04df04"],true),
    new EffetreGlass('T0041314','Clear 13-14mm','t004.jpg',16,["ef60848fb48449ac95b710282a16d61b","656c6b0a10ce485286ed2c310e2c3970"],false),
    #new EffetreGlass('T0060405','Super Clear 4-5mm','t004.jpg',19.20,["f97f14df313d417cb2f2a071620f0ecd","1b2f9368f37a45dcbacf396dcb5c11cc"],false),
    new EffetreGlass('T0060506','Super Clear 5-6mm','t004.jpg',19.20,["91580ba8930a4a3aafec41b7953d98db","7038b5438df5412c927d6b5a6ace490b"],false),
    new EffetreGlass('T0060809','Super Clear 8-9mm','t004.jpg',19.20,["583d601248e24d0492e631377f75091d","5c1b1175d81d4e2abd0aec93fe03e083"],false),
    new EffetreGlass('T0061011','Super Clear 10-11mm','t004.jpg',19.20,['e62bb4a18525490fa59a8df9ea030560','8fdb6b0d40b6436698d5533969b2b449'],true),
    new EffetreGlass('T0061213','Super Clear 12-13mm','t004.jpg',19.20,['8b419bde921c4d669a3213403bf16e6e','f278c308271f45e09a36296eb2331818'],true),
    new EffetreGlass('T0061314','Super Clear 13-14mm','t004.jpg',19.20,['6c9ee820f74e4c1299dbab205924bcc1','5ed338ed3a1b41a0bf56a8bd2acab285'],false),
    new EffetreGlass('T008','Pale Amber','t008.jpg',16,["c5c0fbd5df784a8892d445246ea8acbc","242093d5884d4e6eab54cd258a3617b9"],TRUE),
    #new EffetreGlass('T012','Light Amber - Lt. Topaz','t012.jpg',16,["9ef8694e6ef14204ba6017a952a86045","e226fc608af342d6acdd1df315d4a5e6"],true),
    new EffetreGlass('T014','Medium Amber','t014.jpg',16,["2352dd59401142d394a471c0001fde86","06b86ed74fe747b18b9c89c091e778b2"],true),
    new EffetreGlass('T016','Root Beer - Dk. Topaz','t016.jpg',16,["e7ed379b10344337972cab4b8386a67d","dffcb8bada1041dda5dbd73d2056f616"],TRUE),
    new EffetreGlass('T018','Light Brown','t018.jpg',27.20,["faa0664329b8419c85b4f28ef9d012f4","2e289ca653f0478f978afe9b909f65d8"],true),
    new EffetreGlass('T019','Sage Green','t019.jpg',27.20,["f352c9ab7e2c445b864ddbbf72d7878d","98a6657338d94d6183253033169d957d"],true),
    new EffetreGlass('T020','Light Grass Green','t020.jpg',16,["d5235ed822794df0895c2070f39f7191","f4b1337ec77e4a6db1380ae95f7b22ac",],true),
    new EffetreGlass('T022','Medium Grass Green','t022.jpg',16,["c138eefed56e486aa95c20f1998ab195","15082a6a7f6740429cf461b3385c41de",],true),
    new EffetreGlass('T023','Mosaic Green','t023.jpg',67.20,["c9b2326092682282b4abada6a22cee8e","b2c2784f1021421c92caf1f3ccf2d502"],null),
    new EffetreGlass('T024','Dark Grass Green','t024.jpg',16,["7e40fbb5f5b045a583f4624406212734","337e34e0a70b011b41be28e100882756",],true),
    new EffetreGlass('T025','Olive Green','t025.jpg',16,["dab495b4643d4a89ab8fdfca268e1b1d","3d0bccdba28e4a84b709188fc2c9324d",],true),
    new EffetreGlass('T026','Light Teal','t026.jpg',16,["b1cb6b60a7a043cd843a817fa4c91891","dfa2c0305b154043b7cb77c3eae5202e",],false),
    new EffetreGlass('T027','Dark Teal','t027.jpg',27.20,["7f423164cf514076a24784180de18004","6387fb456dff43568e0f8314f2b56b52",],true),
    new EffetreGlass('T028','Light Emerald Green','t028.jpg',16,["e7eed889cca34bc6b0a01517d75430cf","f4940ff5d6da44f682342c6956cf1c30",],true),
    new EffetreGlass('T030','Dark Emerald Green','t030.jpg',16,["51aee3d8e2054d8dad3ba4d12bb2cfba","b4894a1913ba3bdbeca04523d2be9ed7",],true),
    new EffetreGlass('T031','Pale Emerald Green','t031.jpg',16,["d3e9df4ea79643ff943f015a319a9d36","0064fcb4141547f089fb681475924eb2",],true),
    new EffetreGlass('T034','Light Aquamarine','t034.jpg',16,["0d594a3a69a0465d94b0f7ea6b42efcb","3dd642c023cb49779ca3b14be5275c89",],true),
    new EffetreGlass('T036','Dark Aquamarine','t036.jpg',16,["e13bb809054d451d87c003efe44a2019","6f37ff622daa4c29842b4081c663a394",],true),
    new EffetreGlass('T038','Pale Aquamarine','t038.jpg',16,["f7f65bd98dcb408f842e0dd166876770","4f728e2929fe449cb4454dab10e067ca",],true),
    new EffetreGlass('T039','Dark Violet','t039.jpg',27.20,["bd3f00684e714a0a862304fbd5ab6cae","dc905ea4ddab4cd080fa79e129bafbfd"],true),
    new EffetreGlass('T040','Light Amethyst','t040.jpg',16,["fdd82e8fd55d4b0c93c2de3a6a585e48","9f30bf9d95b6430380f44e033f577738",],true),
    new EffetreGlass('T041','Light Violet','T041.jpg',16,["348fe5dde72a4d608f3e7837d8740e87","8c4499ae94514dd79fe99b388ff00c92",],true),
    new EffetreGlass('T042','Medium Amethyst','t042.jpg',16,["1935e11dc00c48b28e5d89dad0ac6012","703233dfee7a406ebadc11b7b6728b5b",],true),
    new EffetreGlass('T044','Dark Amethyst','t044.jpg',16,["2be54669500a4b598ac0e49135b853f6","e6278eb70aa746439b0fb4202a53ab63",],true),
    new EffetreGlass('T045','Purple Blue','T045.jpg',27.20,["d17d17bb0f9a4bae873a2aeb3f2e3746","bb398eea5daa4eb8be16461fc9dce557",], true),
    new EffetreGlass('T046','Pale Amethyst','t046.jpg',16,["ffe380d587904228b9056d64a8f8d98a","a0119610275141b08604c2230e7d4f98",],true),
    new EffetreGlass('T048','Pale Blue Grey','t048.jpg',16,["705fe4f7676648b786102cdbfb58a053","1b6015ac074145fcbb08a3bccf8f8d9a",],true),
    new EffetreGlass('T049','Straw Yellow','t049.jpg',27.20,["a0aa860f8dea40e6bc66ed6f00a5eae0","b6a6c9dc59b6415e9f48d7fdabc49c9a",],true),
    new EffetreGlass('T050','Pale Blue','t050.jpg',16,["e51875c9fb8641008e50d15968eff1ec","f941d160915f4b51b242c354b9d96774",],true),
    new EffetreGlass('T052','Light Blue','t052.jpg',16,["34bf6d9796ab491fbc9acb3d1e3a5c37","03a0b96dc7bd485c8d70ed3de90768ff",],true),
    new EffetreGlass('T054','Medium Blue','t054.jpg',16,["270afffa10414e948643f65ac7f8084b","67cacab168d444bfab318ad41a22c4fb",],true),
    new EffetreGlass('T056','Dark Blue','t056.jpg',16,["bf9ae223670247fa82c8a9f6b9e74407","1dcb6dd1577a4cac920a8b787137675e",],true),
    new EffetreGlass('T057','Intense Blue','T057.jpg',16,["3ac188c5f15d45fd8274290a02157d99","c8847f9bf11443d39961c295d44e1938",],true),
    new EffetreGlass('T058','Ink Blue','t058.jpg',27.20,["682108c579464df1bf4c38ac1f64f57d","e4a311d71fb642e9b76d8e2f962dd4fb",],true),
    new EffetreGlass('T060','Cobalt Blue','t060.jpg',16,["174a879ac6f643bbaae2c714907c670e","a3e4b26c0c494451a146d8c5ab51c93d",],false),
    //new EffetreGlass('T062','Blue Rose','t062.jpg',16,["72ced01b2ede463a9fa47c8fa2a33c6d","45d384eaef464bbfbf38f164779ebec3",],true),
    new EffetreGlass('T064','Black','t064.jpg',16,["fc79adaeeb1e41d09737e9204263442a","ef215579303f4d14a6ac22c9b68b9f51",],true,true),
    new EffetreGlass('T065','Metallic Black','t065.jpg',45.50,["c611c47636a04eb4b47895fbc6c6d827","ec3abe3c5cb743e3990689978c47019b",],true),
    new EffetreGlass('T066','Super Dense Black','t064.jpg',42.25,["176b7c7388924a3c8887b4153ed4b1ed","2067d7fa7ac043a989440c3623448918",],true),
    //new EffetreGlass('T067','Rose Quartz','t067.jpg',19.20,["7a85d024956e4d47baaa9e734e4e0b37","a8eb765a6c44437e88bf60146c81f366",],true),
    new EffetreGlass('T068','Pale Rose','t068.jpg',16,["592a299d8c0c43f596e06a1f9e17c812","ee663ede0df44ff19f9273b58badec45",],true),
    new EffetreGlass('T069','Yellow (Striking)','t069.jpg',17.60,["4f0f5a5cf3d240d1820965628719bb1c","8d8d327ceef24d84b4c064f1602d5ad7",],true),
    new EffetreGlass('T070','Uranium','t070.jpg',27.20,["9a89cd4b5fb748d1abc745d37d87dda4","e62dbd13d6544a05bb3d6354b9b5f281",],true),
    new EffetreGlass('T071','Yellow Green','t071.jpg',28.80,["a42bceb0fddf4edcb6da68de62162053","ab2f0372e70340929b7a93e42b2c2112",],true),
    new EffetreGlass('T072','Orange (Striking)','t072.jpg',17.60,["a42bceb0fddf4edcb6da68de62162053","ab2f0372e70340929b7a93e42b2c2112",],true),
    new EffetreGlass('T073','Pale Green Apple','T073.jpg',16,["bd26d0c715464b40bced4a0f4a80d3e8","ecc3bd98896d444292b7387b1d44b02d",],true),
    new EffetreGlass('T076','Red (Striking)','t076.jpg',17.60,["90e8a41793e34f808a2a8684860d441e","8856301dd02a420784dce77830870117",],true),
    new EffetreGlass('T080','Pale Lavender','t080.jpg',16,["5874ab34522a48bd976785042204a37a","64c2008d2caa4fa1bc280274ce562b35",],true),
    new EffetreGlass('T081','Dark Lavender','t081.jpg',28.80,["596bdc5f17064ed58faa91b7dff50b9f","ff1c9386a1714aab9a3648ba2048ac26",],true),
    new EffetreGlass('T082','Rosato (Blue Pink)','t082.jpg',16,["4506635cb6864c618b4a262dc9748c7d","f50e0a24d9d44e1ab7fedeedda20e123",],true),
    new EffetreGlass('T083','Dark Lavender Blue','T083.jpg',38.40,["924912bdb696448688541813ac25856a","5ddee6ad565f4d5bb94cd4835af5758a",],true),
    new EffetreGlass('T084','Light Steel Gray','t084.jpg',16,["5daa4dbb8ba74dd08a30b2e974844f89","47e18e15087d4a3eb46e000b8eccfd7e",],true),
    new EffetreGlass('T088','Dark Steel Gray','t088.jpg',16,["b167ac435e9546869c8ff0776a4ed2ea","59e98002279d4085b5cbdb1f122485f4",],true),
    new EffetreGlass('T090','Kelp','t090.jpg',19.20,["598d953687624f3eaf9d5caae89173fc","0b4939e7cba146ee9898fc1324852426",],true),
];

$pastels=[
    new EffetreGlass('P204','White','p204.jpg',17.20,["24bfe2ac9f534e038ac95b242fc2d89a","958d3e45acae393bbebae0bfa3038bbe",],true),
    new EffetreGlass('P208','Light White','p208.jpg',17.20,["0bbc888f08004aa6ba977e91032fa061","9dbd69cf12ac487ea78531c2b7567ecc",],false),
    new EffetreGlass('P210','Avocado Green','p210.jpg',36.80,["eccaf818e5b844358a31dd4cb2fd1863","c2ac67d0c8efcca474295c7648ffe165",],true),
    new EffetreGlass('P211','Sage Green','p211.jpg',36.80,["89fd4e0a16744f3b8be72905a461d7d3","0edef266d3bfef65d896146c37958d3b",],true),
    new EffetreGlass('P212','Pea Green','p212.jpg',17.20,["1c664ca4f3484148b65d150c17a3e93e","421554f08b5c7279ab602a92f5be840d",],true),
    new EffetreGlass('P214','Nile Green','p214.jpg',17.20,["f8359b1af9da46c49c573c31717f7de5","3aa2d5dfcd0a358994fc5afa28025c01",],true),
    new EffetreGlass('P216','Light Grass Green','p216.jpg',17.20,["80551f424ed44945a46f26280e6a7860","7bef36889eccb4b14994fa1c3c3eb81b",],true),
    new EffetreGlass('P217','Mint Green','p217.jpg',42.00,["6b96bcf36ea640ed810f43fe93d29e61","6d5c7ec39d84419f89bec441f8b838ed",],true),
    new EffetreGlass('P218','Petroleum Green','p218.jpg',17.20,["10141c0d3d5441728bec68d6f5f99fc2","59c71debc1b04a7eaba9d8d75cbf57c8",],true),
    new EffetreGlass('P219','Copper Green','P219.jpg',65.60,["ad6f7aba92c8491ba14b5471d8867de1","62798c781c2e875f8f32cd0292a6337f",],true),
    new EffetreGlass('P220','Periwinkle','p220.jpg',17.20,["d34f7bd52805461b911b3241a9fa6e63","56a8ec4397b3613ec3c07c8eb2bacd7b",],true),
    new EffetreGlass('P221','Lavender','p221.jpg',65.60,["9f3c286950614fe793d7b1994ff83eb3","407ced5f76f20484d7fdb3223b1ce8ae",],true),
    new EffetreGlass('P222','Dark Periwinkle','p222.jpg',36.80,["32cc12da7337462d8df9a2559c9d17a4","117b4d6fc3804faeb4e1ebf2edbf44fc",],true),
    new EffetreGlass('P224','Light Sky Blue','p224.jpg',17.20,["86583f78f1d14b23b9e521ce945f9526","3d847e26a70e047e666bc4966c7d77a6",],false),
    new EffetreGlass('P228','Dark Sky Blue','p228.jpg',17.20,["a496d7f155624b8e905895d36c7646ed","0fa7a4f462919e35ededdf684d4f2a52",],true),
    new EffetreGlass('P229','Copper Red Green','p229.jpg',65.60,["555af30ceabf48db8a2884a23adb437d","ee5c88b3fdbe46248626db60fcb7b35a",],true),
    new EffetreGlass('P232','Light Turquoise','p232.jpg',17.20,["9f6d5af260364caf9ee6b9766308fc51","026117bca30a03eb77f46f689c2a7b38",],true),
    new EffetreGlass('P236','Dark Turquoise','p236.jpg',17.20,["39c2e8dc3beb40a299ce7559076c2608","964c14a8bfdddea82087ac66307412c3",],FALSE),
    new EffetreGlass('P240','Light Lapis','p240.jpg',20.00,["44e0927f2c5c4645abe1fbfdfd9ba549","a0e448f132840b3fe96931b75f16e412",],true),
    new EffetreGlass('P242','Medium Lapis','p242.jpg',23.20,["53094f81cd574e59873b808bbc83486f","e9627eb6403db15bfe33482e1b87c9b7",],true),
    new EffetreGlass('P246','Cobalt Lapis','p246.jpg',38.40,["5d85a6340c834271b4219e7c56375e79","4d3bc3fd2c374d5a9e4ef730cb525850",],true),
    new EffetreGlass('P247','Light Lavender Blue','P247.jpg',36.80,["a0b21f748f2547b9b8edf54319dc2788","8b70a943d8357f22c3efa8260bdd9613",],true),
    new EffetreGlass('P248','Light Gray','p248.jpg',17.20,["821033d8db7d4f73b5bbf1bdf15bf5de","ae521c3f29bb345b9694bf154f8d488a",],true),
    new EffetreGlass('P252','Dark Gray','p252.jpg',17.20,["19c587b3a5c64524945b57d94f61d7a3","8c686736a6b12269c35ca9ccc9753d15",],true),
    new EffetreGlass('P253','Striped Pink','p253.jpg',84.80,["0967c9a8530645deb22603ac6fade467","d5186f539abb401dae246ce64a06404a",],true),
    new EffetreGlass('P254','Purple','p254.jpg',84.80,["451e03cb92fb40b88ff050cce087bec4","db5ddd50ea3246d5849843c6312876f6",],false),
    new EffetreGlass('P255','Silver Pink','p255.jpg',70.40,["81eba17922254b429c11fda28da7ee35","5a53625528361e02f9b92d6534a978e1",],true),
    new EffetreGlass('P256','Dark Rose','p256.jpg',91.20,["aec51223701d49d79089e821faa62cd1","8a5e9d7a431195858236f35558c80766",],true),
    new EffetreGlass('P257','Sedona','P257.jpg',91.20,["b84f0bddf34b453a8703039c63812733","d3db93581404473b697973684a493e3f",],true),
    new EffetreGlass('P258','Tongue Pink (Striking)','p258.jpg',29.60,["e6f50ff1332d43269f8bd5ed9745d235","c1c451b4b1ab4a8fb2e7aeeb8c33d18f",],true),
    new EffetreGlass('P260','Light Rose','p260.jpg',27.20,["63269048775147af8d8162894f80d6c3","17e19e499b306ae09038ffbe3164a2d1",],true),
    new EffetreGlass('P261','Angel Pink','P261.jpg',49.60,["4535ddbb63de4196b001b232c56f25b4","e2eead507ce5d309b1ccfa7bf1670cde",],true),
    new EffetreGlass('P262','Powder Pink','p262.jpg',37.60,["04715af8609a4a05b11f8f0c1f18a069","aac2ac58ee1a3d4a3d23a038969a053e",],true),
    new EffetreGlass('P263','Mou Mocha','p263.jpg',65.60,["6e29d2b007954b92bcecce46b92b7aa2","32ea4fcd3d824548ad50d04f0c555452",],true),
    new EffetreGlass('P264','Ivory','p264.jpg',17.20,["a3a8d7bc52e942ec99ffa300cee82265","328e4b592effad73bc6cf420c0359c57",],true),
    new EffetreGlass('P265','Uranium Yellow','p265.jpg',78.00,["3990115c3d124ad2a86af8fa2821c30f","c3324e0798254c5695855d23036adc2b",],true),
    new EffetreGlass('P266','Opal Yellow','P266.jpg',84.80,["31cf7b5c0dfa4da2843552cabeeb1d3a","2c3367763457c471e09dcf915754c60d",],true),
    new EffetreGlass('P268','Pearl Gray','p268.jpg',17.20,["e800725b43a74e8a8852c09f0e9bb8b0","956f1898bc68a0d91d59fa8797fcee05",],true),
    new EffetreGlass('P271','Light Silver Plum','P271.jpg',43.20,["cbb243cba1b34c6db9fab70bf456344b","1ef3cbf8bb23e7849711ec47140d924e",],true),
    new EffetreGlass('P272','Violet','p272.jpg',17.20,["47f298c68f8a4ef3b77186654d850195","28521799210911be24599cd3815c34ad",],true),
    new EffetreGlass('P273','New Violet','p273.jpg',43.20,["3f85b962178d4d6cb71db8df6d6f4640","c9ed901ca13a9bb3ad0f9ac3cf53db74",],true),
    new EffetreGlass('P274','Dark Violet','p274.jpg',43.20,["3f85b962178d4d6cb71db8df6d6f4640","c9ed901ca13a9bb3ad0f9ac3cf53db74",],true),
    new EffetreGlass('P275','Dark Plum','p274.jpg',43.20,["30f772c83e754eec8b6b52fc1ba6be4d","4a617ee4b056d98215054dad6117b773",],true),
    new EffetreGlass('P276','Dark Ivory','p276.jpg',17.20,["1460e0df85cd47e49779252983f0e60e","b1e918b1eeeb34d67823c5d8f24bbe93",],false),
];

$filigranas=[
    new EffetreGlass('F204','Black in Clear','f204.jpg',56.00,["d686ca2b92074a6ce1ca71a2883b2214","68f8e85f4bfc4987b35426e40fc9c8aa",],true),
    new EffetreGlass('F208','White in Clear','f208.jpg',56.00,["d686ca2b92074a6ce1ca71a2883b2214","68f8e85f4bfc4987b35426e40fc9c8aa",],true),
    new EffetreGlass('F209','Pale Blue in Clear','f209.jpg',57.60,["a49c298bddaeb9a30f40ade63011aad1","3f618257d62646edb0191be9a61f2c6e",],true),
    new EffetreGlass('F211','Jade Green in Clear','f211.jpg',57.60,["584f895620e3186a92c16c2fce5b9198","6bea39516cf44e718c53d9c187ab36ce",],true),
    new EffetreGlass('F212','Pink in Clear','f212.jpg',57.60,["989b6a6a85724b2fa8f20181c871442d","3c32745b5480aeead25338af71b20622",],true),
    #new EffetreGlass('F213','Veiled Clear Rubino','f213.jpg',60.80,["47ee340e1fee476f8dd3836f04a93a8b","45d0f67caf4f4f79854f6f9d64a83496",],false),
    new EffetreGlass('F214','Lt. Turquoise in Clear','f214.jpg',57.60,["30748a96b24d6f076221087a63cb2514","346223f984b14c9bb054cc6520a4148b",],true),
    new EffetreGlass('F215','Lt. Aquamarine in Clear','f215.jpg',57.60,["8ab0f20288eef5d6dffe1e8699d62b7d","431a71fe1f8449bba67609fd87c1704a",],true),
    new EffetreGlass('F216','Goldstar in Clear','f216.jpg',80.00,["c93f7a04da3f206eca85b0a4b570c8eb","d2b0b488b53e423c9017dcc5d655613f",],true),
    new EffetreGlass('F218','Teal Green in Clear','f218.jpg',57.60,["6ceac7dc55e77dca322e09c477fc8c19","164a986b028e4b188d69dfbcb7158b05",],true),
    new EffetreGlass('F219','Nile Green in Clear','f219.jpg',57.60,["b50a3f67bcad9c16808bceddf4f799dc","a66fb9ba377842089306d7f2e01295e3",],true),
    new EffetreGlass('F220','Blue Aventurine in Clear','f220.jpg',89.60,["c8cf9bbdccd6463e92bbd6a3b154009a","b61b96bc137c0d7bfecc1f841125bde0",],true),
    new EffetreGlass('F224','Red in Clear','f224.jpg',57.60,["808c9f0d58424c09af3d6a27b0a5ccee","a115a699350c531f934aefd86eb345d3",],true),
    new EffetreGlass('F228','Green in Clear','f228.jpg',56,["3432e0d6a10649008ead8acea2e1d5df","07eeadf9adc02dd3b39e6237adaf45be",],true),
    new EffetreGlass('F229','Lt. Gray in Clear','f229.jpg',57.60,["b93f91cb7cc84959b865bac72dded5d0","057c8402cc83dd89975afa9a93b83f77",],true),
    new EffetreGlass('F232','Aquamarine in Clear','f232.jpg',56,["2474355af72a48c7a2b84189de0516f4","4e585801009f36edb62e51c209aad8bd",],true),
    new EffetreGlass('F236','Yellow in Clear','f236.jpg',57.60,["8d01aadd105247b88812bc7f3f8439d1","e2459c77867dab70399831f0c7187fa7",],true),
    new EffetreGlass('F237','Amethyst in Clear','f237.jpg',56,["ed4aecbd2fb842d2813fa0209baabf89","d8f6a90bc3d1da21bfee38b0ff11f88f",],true),
    new EffetreGlass('F240','Pale Pink in Clear','f240.jpg',56,["2b7e9704872a453a86cc595faba61f64","7601ab587e239e3fbe3a7d4a9018299c",],true),
    new EffetreGlass('F242','Medium Lapis in Clear','f242.jpg',57.60,["6b49b5040a034873a2c17ab5899de393","5f814c9061be8c819753a5ef0bc9777e",],true),
    new EffetreGlass('F244','Orange in Clear','f244.jpg',57.60,["07183545d4764d389b401bd567bca090","f6fb21c00d38a67886774185131ae70e",],true),
    new EffetreGlass('F248','Blue in Clear','f248.jpg',57.60,["ec7f19ed3d364405bcb0a1b8ef0d94e5","c8617eeb7d895266c5681ea27c2cc3b5",],true),
    new EffetreGlass('F264','Ivory in Clear','f264.jpg',57.60,["aa06836366d1406b94dcaa30afe6a9af","0f48ef037724e62c0c2386d656130d9a",],true),
    new EffetreGlass('F272','Violet in Clear','f272.jpg',57.60,["aca6f3dcfdb146aeb4e67e33a5c18163","47904515d60487777048fd15c0404c79",],true),
    new EffetreGlass('F420','Coral in Clear','f420.jpg',57.60,["e8abe8f220ea4fa9a95623a0d9eb1cf1","0cc990ee805415c3747cde1dc9ff251f",],true),
    new EffetreGlass('F438','Maroon in Clear','f438.jpg',57.60,["3f4a4d6332cd4747ab4e55467602cf30","3df8a9226006ebce658384ddbb805bcd",],true),
    new EffetreGlass('F916','Solid Goldstone Rod','f916.jpg',80,["49774cf5c4574627848571ab5704115e","0db2b214d9784b248bd469d42f132d1d",],true),
    new EffetreGlass('F920','Blue Aventurine Rod','f920.jpg',96,["c66e823e2341404d9f26c811c63cde83","4e13c9e02680a1dbe836d1436f3f843f",],true),
];

$alabaster=[
    new EffetreGlass('A304','Pale White<br>(common white)','a304.jpg',22.40,["749ef6f1e0c743818e9e7327861ebeb2","fe7e22eeba3dcf40bb4c3f1c011d53fb",],true),
    new EffetreGlass('A308','Light White','a308.jpg',22.40,["1c66e6b0441049c8be0336caadb26b1f","985986f35c385e00102f880cce52f479",],true),
    new EffetreGlass('A312','Special White','a312.jpg',25.60,["3f90563c5e1b46a69ac97d1c3bf62aa7","d4983c75bce1cb5f090a30ed7a882ea0",],true),
    new EffetreGlass('A316','Agate White','a316.jpg',22.40,["aa1ea67d02594467bff0500d259375f2","049c4a40d9ba079370e5eb60ade857a7",],true),
    new EffetreGlass('A320','Ivory','a320.jpg',22.40,["8d08df655a834074b43e611e83880f84","dbfceceb9229b4052c7f4d0745588559",],true),
    new EffetreGlass('A324','Yellow','A324.jpg',22.40,["1ee7a8205cc04fc9981c586701f90557","e3c4d884cfb942da93f63a1b7daf4804",],true),
    new EffetreGlass('A340','Green','a340.jpg',22.40,["5b21634edbcc43d095b77dba03ead171","e326e3416041ee89d9d02d862c963125",],true),
    new EffetreGlass('A344','Pine Green','a344.jpg',22.40,["9701168f77ce41378183509e68b89e74","6477d9c2e35d59f321ae74dd734c6b38",],true),
    new EffetreGlass('A348','Light Turquiose','a348.jpg',22.40,["ed96ce641e2b4f42b87bb419532fbc32","95446b5bbdec3d96f864a5f596776104",],true),
    new EffetreGlass('A352','Med. Turquiose','a352.jpg',22.40,["7aa9ca6b87794e3b99cb583bb6e63562","1fe6756efdf4ac3f4d9fc0780e38c426",],true),
    new EffetreGlass('A356','Dark Turquiose','a356.jpg',22.40,["672ad354be48443ebae3708b73a3fc01","76c48be13e6c62875d4ba7bcb68b5817",],true),
    new EffetreGlass('A360','Light Periwinkle','A360.jpg',22.40,["7c6dbe25176845edb132ff01df584a5c","4135f2ee80ee114e7b50b67a72eee941",],true),
    new EffetreGlass('A364','Dark Periwinkle','a364.jpg',22.40,["a7e7dbf62af746119dd72070acaa6bed","7595311e7afd4e6c9b0a0fc6c90256df",],true),
    new EffetreGlass('A368','Lapis','a368.jpg',22.40,["64ca4fd6717747f08db249e595329a6a","df01765405ebff190d8ca1fa45a4b1e3",],true),
    new EffetreGlass('A372','Light Rose','a372.jpg',28.80,["acc8710dc6814a65a1e9215898080e27","8471e4d7a220ce9d9e342edda6b56e98",],true),
    new EffetreGlass('A376','Medium Rose','a376.jpg',28.80,["c27deec4cc87469b94bb50d95b357421","e7b0d5f1e2a233cf367281f66bfbbce4",],true),
    new EffetreGlass('A380','Dark Rose','a380.jpg',28.80,["f52a2f7c4f9bf3ac1d5c7121508997ce","a1339406ed2648c0826a341ef2299252",],true),
    new EffetreGlass('A384','Cobalt Blue','a384.jpg',22.40,["463374a704bd45e0aa503efd5a227764","bdf235870b38ad70fdbd6a388f442fd3",],true),
];

$opalinos=[
    new EffetreGlass('O504','White','o504.jpg',17.60,["113d29875fc14d1ca51782fc094bf158","17bdd1572a166970c8fe5f9cffc3ae2e",],true),
    new EffetreGlass('O508','Yellow','o508.jpg',17.60,["b6f6698bf207454389ca79c03b055550","cf0e880ffd4a43989b04a29d7b29413d",],true),
    new EffetreGlass('O516','Nile Green','o516.jpg',17.60,["2bb7602dd1a6491e98a6099e76a51ec9","ad6701cab60e479bb6709ce60b4355cc",],true),
    new EffetreGlass('O520','Grass Green','o520.jpg',17.60,["44e89f73fd2e4970a9acb6d9fef7124c","48188f2e0926f7c6ae8ca530689cd77b",],true),
    new EffetreGlass('O524','Sky Blue','o524.jpg',17.60,["de3e9748fae84730baddb4eebb86a690","251acb948ed4f8ef6b3add04e19f3a59",],true),
    new EffetreGlass('O528','Periwinkle','o528.jpg',17.60,["3d68a73895154853bcea949ac7ca37f0","92daa10570ac109c41a5baf854a77b74",],true),
    new EffetreGlass('O532','Pink (Striking)','o532.jpg',28.80,["ed4d7680880e4a478b2297b7ac182878","1fbea2853d4d4b79a6a78f25fdeaec3c",],true),
];

$specials=[
    new EffetreGlass('S404','Light Lemon Yellow','s404.jpg',20.80,["140906f0632c421d94ecff8fa60bc4f5","a783138b4f4cf3ac5c7d46896341cfe3",],true),
    new EffetreGlass('S408','Medium Lemon Yellow','s408.jpg',20.80,["7e2770ea133d4cbab2a628099ec0fe49","fad28a467465424b89229a8fdb559154",],true),
    new EffetreGlass('S412','Dark Yellow','s412.jpg',20.80,["a52772eeda3b45ab8de0f2596a031d0e","7bb8b0542d56483dab5e407110e45083",],true),
    new EffetreGlass('S416','Bright Yellow','s416.jpg',20.80,["6dce99733386488cbe87c2cd34c1a092","770fd0b7df849d98891a2b270efbbed2",],true),
    new EffetreGlass('S418','Butter Cream Yellow','s418.jpg',20.80,["7536e053aea54930868b3244fa0dcd38","c82a65a167ee473e83ccbb14d86182df",],true),
    //new EffetreGlass('S419','Yellow Apricot','S419',40.00,['d789e616d1b445c48da2da20313c09a0','2f6e840150a87388c7474ce905e66653'],false), removed from site
    new EffetreGlass('S420','Coral','s420.jpg',20.80,["892b8769bbab4e0f8127c23946002dfa","cacb72d132a7150669558b46ba252210",],true),
    new EffetreGlass('S424','Carrot Red','s424.jpg',20.80,["6829e848c9044206b0eb3167f95e5ed8","992bd83cbf983bceb28d922683cb08dc",],true),
    new EffetreGlass('S428','Light Reddish Orange','s428.jpg',20.80,["ab5b9d2f3b6849f291a10bd14e16e7f3","04aff47380e1494c3485ad630098bca3",],true),
    new EffetreGlass('S432','Medium Red','s432.jpg',20.80,['91e4e4ce9f694d41a89af178a2960534','888895223948692599360680571a43bb'],true),
    new EffetreGlass('S436','Dark Red','s436.jpg',20.80,["7785d1da81074770bdfb5b96877e83e9","1eed8bd435f99d5e6b4f4aa1b0d81f62",],true),
    new EffetreGlass('S438','Dark Purple Red','s438.jpg',20.80,["506ed255768240bca71af2197774cc9a","d1c41b9e2ce149fcd411085380e8cf02",],true),
    new EffetreGlass('S440','Red Roof Tile','S440.jpg',37.60,["63601dc925d147beaca75e46dfa231db","aea4406fa8dda9fd23b5b169301f3f30",],true),
    new EffetreGlass('S444','Light Brown','s444.jpg',20.80,["b9ded3e78244424b94f1dffdea8b7626","169decd4006272f82eb3e59c34c4d061",],true),
    new EffetreGlass('S448','Dark Brown','s448.jpg',20.80,["c55ec8948d6040258a2e5b790c540745","d4cd84c53f52e3fb4b30f1b2f863d3a2",],true),
    new EffetreGlass('S452','Dark Red Brown','s452.jpg',20.80,["ef444817816544b9963de9b657bc570c","2751237c23174dfd4779140095e4bacd",],true),
    new EffetreGlass('S456','Gold Pink (Striking)','s456.jpg',91.20,["60e4cce6fb6e487d93a6568b4ee0c08d","2c3576a35d6c50dddc3c34df4d1fd46f",],true),
    new EffetreGlass('S460','Mustard','s460.jpg',20.80,["f935f3a376644bd093f5ed26a3aa7bfe","9724ee73592508e79535055da5114964",],null),
];

$cools=[
    new EffetreGlass('C620','Kiwi','C620.jpg',64,["d752882730ed454ab173cb135ccf2e39","9c7522dc7f2342059262876cdc331b88",],true),
    new EffetreGlass('C630','Blue Lagoon Transparent','C630.jpg',64.00,["d2ec1484635b48ce8e9a1bc8a0488630","9d570ed909f44dfcbbfc621ee401d180",],true),
    new EffetreGlass('C640','Mimosa Yellow','C640Mimosa-Yellowsm.jpg',48,["46ab7a95c3df41aaaf34da82affb8995","430753f922044a86b5705140e18e6704",],true),
    new EffetreGlass('C641','Deep Mimosa Yellow','C641-Deep-Mimosa-Yellow-sm.jpg',48,["2051879467fe42b097057458e8f630f9","6842661a45a24d619bdd2c8b3fa889b8",],true),
    new EffetreGlass('C642','Orange African Daisy','C642-Orange-African-Daisy-sm.jpg',48,["baac179546fd4d4ca00f4925db4a34f2","2ea981fea22a481e8a7620711bab115b",],true),
    new EffetreGlass('C643','American Beauty','C643-American-B-sm.jpg',48,["e6d57fd5f90a440f883660d253f210c5","7f6f5d9cc3db4b749332bd58c9c08c1f",],true),
    new EffetreGlass('C650','Mustard Rock Relish','C650-Relish-sm.jpg',64,["4389140de19f431291e74e3c8d23c6fa","2dc5193fbd6442bd903611ecdf0f4b73",],true),
    new EffetreGlass('C651','Yellow Rock Venetian Sunrise','C651-Yellow-Rock-sm.jpg',64,["42670632a2a949c98eba2e7977eabcd5","70715c4c0a0b426f9053a977ab6b39c5",],true),
    new EffetreGlass('C652','Orange Rock','C652-Orange-Rock-sm.jpg',64,["1e11fc353ba7438f8fb6347cdfb63e67","1ac580b449834b7aae6b834dadcfe1d4",],true),
    new EffetreGlass('C653','Red Rock','C653-red-rock-sm.jpg',64,["8bda93fa9e804b7aad602cf5a4c45d3a","4b3be5f214ca424484cbc9d84623f0bb",],true),
    new EffetreGlass('C654','Brown Rock','C654-Brown-Rock-sm.jpg',64,["8dde6905b8a346e0ae5e3333f5b72812","1ef2d3ea593b4e87be3f13b9148cde8e",],true),
    new EffetreGlass('C680','Green Tea','C680-Green-Tea-sm.jpg',64,["5b4aba6928bd4a83a2b552d41d36003d","b65ce031e61f4b24a65f8e204cf9336d",],true),
    new EffetreGlass('C681','Strawberry Shake','C681-Strawberry-Shake-sm.jpg',64,["0412773939da4b5395f457dc54027fe3","73658615e04647c287e6dff4b0510f45",],true),
    new EffetreGlass('C682','Cherry Shake','C682-Cherry-Shake-sm.jpeg',64,["37a9a631703c4673b0dcf4c365080b58","ee019ed748dc4a389c4d583d95a8e443",],true),
    new EffetreGlass('C684','Blueberry Marble','C684-Blueberry-Marble-sm.jpg',64,["b3aa74aa2c7544ffb47b14b97d319131","f200bafd7c8947468765baedb20e5974",],true),
    new EffetreGlass('C685','Hawaiian Clay','C685HawaiinClay-sm.jpg',64,["ac76489033fd43c08ae69854d39d2283","0ce6cf060d5e4eb980da5d25424ba92e",],true),
];