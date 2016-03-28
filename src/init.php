<?php
include __DIR__ . '/../vendor/autoload.php';

$twig = new \Twig_Environment(new \Twig_Loader_Filesystem(__DIR__ . '/../view'));

$og = [
];

$strips = [
    1660 => [
        'title' => '機長廣播',
        'caption' => '啊靠，你有付錢嗎？嘿，有人有付錢嗎？有的話能讓我借一下你的電話嗎？',
        'style' => "max-width:300px",
    ],
    1659 => [
        'title' => '輪胎鞦韆',
        'caption' => '如果我們能找到其中一個輪胎掩埋場，那下次他來搶他的卡車的時候我們就能抽身讓他把車拿回去。',
        'style' => "max-width:500px",
    ],
    1658 => [
        'title' => '估計時間',
        'caption' => '侯世達定律：你每花一分鐘思考侯世達定律，你就有一分鐘沒在工作，而且你永遠做不完！完～～蛋～～啦～～～！',
    ],
    1657 => [
        'title' => '瘋狂',
        'caption' => '我在十本字典裡面找 "insanity"，沒有一本寫了類似的東西。DSM-4 裡面也沒提到。不過我會繼續找下去，搞不好 DSM-5 裡面會有！',
        'style' => "max-height:400px",
    ],
    1656 => [
        'title' => '開始了',
        'caption' => '也可以試試看「矮額～」',
        'style' => "max-height:200px",
    ],
    1654 => [
        'title' => '萬用安裝 script',
        'caption' => '失敗的時候通常不會有什麼問題，如果安裝了好幾個版本，那其中一個版本是正確版本的機會也會提高。（注意：建議加上「yes」指令跟「 2>/dev/null」）',
        'style' => "max-width:400px",
        'comment' => '這篇好像沒什麼翻譯到...',
    ],
    1652 => [
        'title' => '條件判斷',
        'caption' => '「如果你執著夠了，我們來去吃晚餐」「你又來了」「我沒有！」',
        'style' => "max-height:400px",
    ],
    1643 => [
        'title' => '溫度',
        'caption' => '「攝氏弳度還是華氏弳度？」「呃，不好意思，我先走了」',
    ],
    1642 => [
        'title' => '重力波',
        'caption' => '最後一筆 Linkedin 連結請求創下了天文史上發射能量最強的紀錄，也許該回他一句「鼻要」',
        'style' => "max-height:300px",
    ],
    1638 => [
        'title' => '反斜線們',
        'caption' => "我爬了一下我 .bash_history，看哪些指令有最多的特殊字元跟最少的英文字母，贏家是「cat out.txt | grep -o '[[(].*[])][^)]]*$'」...我不記得這是什麼也沒印象我原本想幹嘛，希望這行指令會動。",
        'style' => "max-height:300px",
    ],
    1636 => [
        'title' => 'XKCD 架構',
        'caption' => "此網站需要 Sun Java 6.0.0.1 (32-bit) 或更高版本，您安裝了 Macromedia Java 7.3.8.1¾ (48-bit)。點此（連結到 java.com 首頁）可以下載安裝程式，雖然他會正常執行不過什麼都不會安裝。",
        'style' => "max-width:300px",
    ],
    1633 => [
        'title' => '可能還沒發現的行星',
        'caption' => "超人在鳥跟飛機的邊界上，難怪有人會搞錯。",
        'style' => "max-height:700px",
    ],
    1613 => [
        'title' => '機器人三定律',
        'caption' => '以第五個順序來說，自動駕駛車會很樂意載你到處走，但如果你要他們開到二手車行，他們會把門鎖起來，然後有禮貌的問你餓死人類要花多久時間。'
    ],
    1606 => [
        'title' => '五日天氣預報',
        'caption' => '有句話是這樣說的：如果你不喜歡太陽系這裡的天氣，等個五十億年就好了。',
        'style' => 'max-width: 500px',
    ],
    1604 => [
        'title' => '蛇',
        'caption' => '最後一條色環用來標示這條蛇被人抓起來之後能容忍到什麼程度而不咬人',
        'style' => 'max-height:205px;',
    ],
    1601 => [
        'title' => '人際孤立',
        'caption' => '2060: 那些開心著彼此聊著自己怎麼離開電腦的超智慧AI已經變成了老古董。現在的量子超生物忙著做多重宇宙模擬，根本沒空發現他們自己是在電腦裡面！'
    ],
    1597 => [
        'title' => 'GIT',
        'caption' => "如果沒用的話，打開 git.txt ，裡面那支電話可以找到我一個朋友他會用 GIT。他會先跟你講幾分鐘的「這很簡單，你就把 branch 想成是....」，之後他就會告訴你一段指令，那段指令能把東西修好。",
        'style' => "max-height:500px",
    ],
    1521 => [
        'title' => '石中劍',
        'caption' => "我只是覺得這劍很酷而已，哪有那麼麻煩的..",
    ],

    1319 => [
        'title' => '自動化',
        'caption' => 'Automating 的字根 Auto- 意思是「自己」， mating 則是「搞」的意思',
        'style' => "max-width:450px",
    ],

//    1305 => [
//    ],
    1268 => [
        'title' => '平行宇宙',
        'caption' => '我想我應該是在1990年代後期從 Earth Prime 被傳送過來的。你們的宇宙跟我的都一樣，除了那個龍蝦什麼的以外，還有你們某些地方的人有時候會為了某些理由改掉時鐘的時間。',
        'style' => "max-width:300px",
    ],

//    1253 => [
//    ],
    1244 => [
        'title' => '一句話',
        'caption' => '嚴格說起來，我們用的是 Orbiter',
        'style' => "max-height:400px",
    ],
    1200 => [
        'title' => '授權',
        'caption' => '你先別說話，不，我才不會登入帳號以後離開我的筆電趴趴走。而且我有設定在幾分鐘沒有動作之後自動切換到我哥的帳號。',
        'style' => "max-width:350px",
    ],
    1174 => [
        'title' => 'APP',
        'caption' => '我按下 No 的時候大概表示我已經放棄了。所以別再把我轉址到剛剛我原本想打開的那頁了，帶我回首頁吧。',
        'style' => "max-height:411px",
    ],
    1144 => [
        'title' => '標籤',
        'caption' => '<A>:像是</a>這樣。&nbsp;',
        'style' => "max-width:400px",
    ],
    1098 => [
        'title' => '五星評分',
        'caption' => '我不小心迷路走進全世界最嚇人的葬禮，墓碑上面只有名字跟五星評分。我嚇死了。我回到家以後想要在 Yelp 上面寫一篇壞的評論文，但當我的游標移到「一顆星」的按鈕上面時，我感到一陣惡寒...',
        'style' => "max-height:300px",
    ],
    979 => [
        'title' => '前人的智慧',
        'caption' => '很長的求救文應該要讓討論串的第一篇可以被任何人編輯，開頭是「來自未來的各位，我們現在的進度是...',
        'style' => 'max-height:270px;',
    ],
    965 => [
        'title' => '元素之力',
        'caption' => '在各國之中，操縱 Uuo 的大概是最不嚇人的。操縱氙的只好人家一點，不過至少他們的霓虹燈閃閃爍爍很有宣傳效果。',
        'style' => 'max-height:500px;',
    ],
    961 => [
        'title' => '永恆之火',
        'caption' => '懷抱希望，只要等得夠久，說不定海灘球就會消失，卡住的畫面會回來。',
        'img_url' => '/strip/961.gif',
    ],
    936 => [
        'title' => '密碼安全性',
        'caption' => '對於那些理解資訊安全以及資訊理論，而且正在跟不懂的人戰的人，我誠摯的道歉。',
    ],
    787 => [
        'title' => '軌道載具',
        'caption' => '正常來說，從卡納維爾角發射的太空梭不太能安全的抵達能到達這幾個點的軌道。不過這篇是平行世界，要嘛是太空梭從范登堡空軍基地發射，要嘛是大家很討厭外灘群島。',
    ],
    763 => [
        'title' => 'Workaround',
        'caption' => '我曾經處理過某個朋友爸爸的電腦，他的硬碟被分成六個 partition，從 C: 到 J:，每個槽都有一個「Documents」資料夾，檔案好像是隨機存到六個槽裡面的其中一個。我知道這時候什麼都不要問。',
        'style' => "max-width:400px",
    ],
    695 => [
        'title' => '精神號',
        'caption' => '2010年1月26日，任務的第 2274 個火星日，NASA 宣布精神號無法移動轉為固定式研究站，預計數個月後就會因為太陽能板被塵埃覆蓋，電力不足而必須關閉。',
        'style' => "max-width:600px",
    ],
    664 => [
        'title' => '學術界 vs 商業界',
        'caption' => '有工程師已經解決了 P=NP 問題，答案被鎖在某個打蛋器校正程式裡面。我們每發現一個 0x5f375a86，背後有數千個沒有被發現的。',
    ],
    619 => [
        'title' => '功能支援',
        'caption' => '我知道有些人已經有平滑 flash 影片支援，不過我跟我的 Intel 顯示卡還在等開發流程中的某個 kernel patch，不然我們只能到格子狀的喬恩·史都華',
        'style' => "max-width:400px",
    ],
    600 => [
        'title' => '機器男友',
        'caption' => '這正好是我家裡面讓人最不舒服的壁爐裝飾。',
    ],
    503 => [
        'title' => '用詞',
        'caption' => '然後，是只有我這麼覺得，還是日本跟紐西蘭看起來超像的？有人看過他們兩個同時出現嗎？',
    ],
    393 => [
        'title' => '終極遊戲',
        'caption' => '安息吧，Gary',
    ],
    349 => [
        'title' => '成功',
        'caption' => '安裝 OpenBSD 有 40% 的導致鯊魚攻擊，這是他們唯一的安全性問題。',
        'style' => "max-width:400px",
    ],
    327 => [
        'title' => '媽咪攻擊',
        'caption' => '她女兒的名字是「救命！我被困在駕照工廠裡面！」'
    ],
    323 => [
        'title' => '鮑爾默高點',
        'caption' => 'Apple 靠的是自動化杜松子酒靜脈注射。'
    ],
    202 => [
        'title' => 'Youtube',
        'caption' => '',
        'style' => 'max-width:400px',
    ],

];

//////////////////////////////////////////////

function die404()
{
    global $twig; // i hate global...

    http_response_code(404);
    echo $twig->render('error_404.twig', [
       'page_title' => '網頁找不到（哭',
    ]);
    die();
}