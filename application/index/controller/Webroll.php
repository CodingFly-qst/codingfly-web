<?php

namespace app\index\controller;

/**
 * 手机适配 自适应
 */
use app\index\base\ControllerBase;
use think\Config;

class Webroll extends ControllerBase
{
    /**
     * @return string
     * @throws \think\Exception
     */
    public function index()
    {
        $rooturl=Config::get('common')['url_root'];
        $i18n = [
            "en"=>[
                "style"=>$rooturl."static/css/webroll/webroll_e.css",
                "title"=>"CodingFly | The world's first developer community  based on blockchain",
                "homePage"=>"Home",
                "whitePaper"=>"White Paper",
                "whitePaperUrl"=>$rooturl."static/pdf/CodingFly_WhitePaper_EN_V1.pdf",
                "forum"=>"Forum",
                "switch"=>"CN",
                "switchLang"=>"zh-CN",
                "page1"=>[
                    "title"=>"What is CodingFly?",
                    "content" => "CodingFly provides diversified and personalized solutions for the collaborative work 
                    among coders around the world. We are dedicated to construct a community with specified growing systems
                    exclusively for coders to communicate, learn, work and make progress. Adopting blockchain technology,
                    we are developing a public, transparent and reliable business mode to combine technology innovation and
                    digital commerce, allowing users without technical background to cooperate with coders on CodingFly
                    platform. In this way, we are creating a new community to achieve a win-win solution for coders and users.",
                ],
                "page2"=>[
                    "title"=>"What is FLYC?",
                    "content"=>"FLYC is the token and incentive method used in CodingFly system to stimulate its internal
                    ecology and guarantee a perpetual and stable long-term operation. At the meantime, FLYC makes it
                    possible for a large-scale, high-efficient and low-cost social collaboration, which will drive a
                    new social-economic society in the digital time to emerge.",
                    "adImage"=>$rooturl."static/images/webroll/t1_e.png"
                ],
                "page3"=>[
                    "block1"=>[
                        "title"=>"Promote your Project to",
                        "subTitle"=>"more programmers",
                        "content"=>"If you are working on your own project, please provide us with an introduction.
                        Then we will create a column specifically for your project and push notifications in the
                        community for a wide range of people to know excellent projects and have opportunities to
                        be part in them."
                    ],
                    "block2"=>[
                        "title"=>"Provides efficient",
                        "subTitle"=>"peer-to-peer solution",
                        "content"=>"In the search bar, you will find the categories listed for various problems.
                        We will subdivide the categories into detailed questions for you to detect answers quickly and easily."
                    ],
                    "block3"=>[
                        "title"=>"Publish your personal code for",
                        "subTitle"=>"people to witness your ability",
                        "content"=>"In the recruitment section, we will challenge coders to write codes and upload
                        videos according to the requirements. When your uploads were approved by the system,
                        you will have the privilege for “reward” — viewers can pay you online if they like your
                        uploads. In this way, you will have chances to show and prove your excellent coding ability."
                    ],
                ],
                "page4"=>[
                    "title"=>"Looking forward to have you at CodingFly",
                    "greeting1"=>"In CodingFly, we promote a happier,",
                    "greeting2"=>"liner and more efficient approach of work for you to share your project, personal codes,",
                    "greeting3"=>"design and your lifestyle. This is a free land for all the code lovers to show yourself
                    and gain the rewards you deserve.",
                    "icons"=>[
                        ["url"=>$rooturl."static/images/webroll/qd_e.png", "alt"=>"front-end"],
                        ["url"=>$rooturl."static/images/webroll/iOS.png", "alt"=>"ios"],
                        ["url"=>$rooturl."static/images/webroll/java.png", "alt"=>"java"],
                        ["url"=>$rooturl."static/images/webroll/PHP.png", "alt"=>"php"],
                        ["url"=>$rooturl."static/images/webroll/android.png", "alt"=>"android"],
                        ["url"=>$rooturl."static/images/webroll/rgzn_e.png", "alt"=>"ai"],
                        ["url"=>$rooturl."static/images/webroll/jg_e.png", "alt"=>"architecture"],
                    ],
                ],
                "page5"=>[
                    "title"=>"Welcome home",
                    "content"=>"CodingFly is devoted to become the most considerable community for programmers and their projects.",
                    "content2"=>"You will find your space no matter you are starting your coding journey or researching on flying to the Mars.",
                    "copyright"=>"Copyright © CodingFly Foundation Ltd",
                    "microPrompt"=>"WeChat",
                    "cooperation"=>"Partners"
                ]
            ],
            "zh-CN"=>[
                "style"=>$rooturl."static/css/webroll/webroll.css",
                "title"=>"CodingFly | 全球首家链上程序员社区",
                "homePage"=>"首页",
                "whitePaper"=>"白皮书",
                "whitePaperUrl"=>$rooturl."static/pdf/CodingFly_WhitePaper_CN_V1.pdf",
                "forum"=>"论坛",
                "switch"=>"English",
                "switchLang"=>"en",
                "page1"=>[
                    "title"=>"CodingFly是什么？",
                    "content"=>"为全球程序员群体多样化、个性化的协同工作提供解决方案。CodingFly致力于为程序员群体建造一个
                    属于他们的社区，在社区中有专属的成长体系，包括，交流，学习，工作，成长。通过区块链技术打造公开、透明、
                    有据可依的技术开发领域与数字商业模式，让更多不懂技术的用户可以放心通过CodingFly平台与程序员进行合作，
                    共建新型的程序员社区体系，实现供需双方共赢的良性生态环境。",
                ],
                "page2"=>[
                    "title"=>"FLYC是什么？",
                    "content"=>"FLYC作为CodingFly经济系统内的价值媒介和激励手段，解决了激活内部生态、保证系统长期稳定运营的内生动力问题，
                使得大规模、高效率、低成本的社会协作成为可能，催生崭新的数字时代社会经济形态",
                    "adImage"=>$rooturl."static/images/webroll/t1.png"
                ],
                "page3"=>[
                    "block1"=>[
                        "title"=>"让更多的程序员",
                        "subTitle"=>"了解你的项目",
                        "content"=>"如果你有自己的项目，请给出介绍，我们将为你开设专栏，和不定期的社群推送，让更多的人看到和
                        使用优质的项目，并有机会申请参与其中。"
                    ],
                    "block2"=>[
                        "title"=>"提供高效点对点的",
                        "subTitle"=>"问题解决方案",
                        "content"=>"你可以在搜索栏，找到问题对应名词的分类，我们将尽量细分到单一的问题，为你更快速和方便
                        的找到答案。"
                    ],
                    "block3"=>[
                        "title"=>"发布你的个性代码",
                        "subTitle"=>"见证你的实力",
                        "content"=>"你可以按照招募要求发布代码和视频，审核通过后，可以开通付费功能，通过赞赏来见证你的个人能力，
                        并获取更多的展示机会。"
                    ],
                ],
                "page4"=>[
                    "title"=>"期待你的加入",
                    "icons"=>[
                        ["url"=>$rooturl."static/images/webroll/qd.png", "alt"=>"front-end"],
                        ["url"=>$rooturl."static/images/webroll/iOS.png", "alt"=>"ios"],
                        ["url"=>$rooturl."static/images/webroll/java.png", "alt"=>"java"],
                        ["url"=>$rooturl."static/images/webroll/PHP.png", "alt"=>"php"],
                        ["url"=>$rooturl."static/images/webroll/android.png", "alt"=>"android"],
                        ["url"=>$rooturl."static/images/webroll/rgzn.png", "alt"=>"ai"],
                        ["url"=>$rooturl."static/images/webroll/jg.png", "alt"=>"architecture"],
                    ],
                    "greeting1"=>"在CodingFly，创建更快乐，简单高效的工作方式，分享你的项目，你的个性代码，",
                    "greeting2"=>"你的设计，你的生活方式，这里是爱码士的盛宴，展示你自己，获取你的知识回报，记住你是一个自由码客。",
                    "greeting3"=>"",
                ],
                "page5"=>[
                    "title"=>"欢迎回家",
                    "content"=>"CodingFly旨在成为最贴心的程序员社区，和他们的项目所在地。",
                    "content2"=>"无论是你人生的第一段代码，还是你想研制如何飞上火星，这里都有你的空间。",
                    "copyright"=>"Copyright © CodingFly Foundation Ltd",
                    "microPrompt"=>"WeChat",
                    "cooperation"=>"合作伙伴"
                ]
            ]
        ];
        $lang = $this->request->get("lang");
        /*if(!isset($lang) || "" == $lang){
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);
        }*/
        if(preg_match("/zh-c/i", $lang)){//简体中文
            $this->view->assign("content", $i18n['zh-CN']);
        }else{
            $this->view->assign("content", $i18n['en']);
        }
        return $this->view->fetch();
    }
}