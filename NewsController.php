<?php
declare(strict_types=1);

namespace App\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Annotation\Controller;

/**
 * @Controller()
 */
class NewsController extends AbstractController
{
    /**
     * @RequestMapping(path="/app/update", methods="get,post")
     */
    public function appUpdate()
    {
        $params = $this->request->all();
        $result = [
            "shopUrl"=>"https://apps.apple.com/cn/app/%E5%93%94%E5%93%A9%E5%93%94%E5%93%A9%E6%A6%82%E5%BF%B5/id1204090346",
            "fileUrl"=>"https://yjy-oss-files.oss-cn-zhangjiakou.aliyuncs.com/apk/app-news-armeabi-v7a-release.apk",
            "latestVersion"=>"1.0.3",
            "latestDescription"=>"1 加入了自动升级功能 2 动态授权存储权限 3 IOS 端支持 swift 语言"
        ];

        return $this->response->json($result);
    }

    /**
     * @RequestMapping(path="/user/profile", methods="get,post")
     */
    public function userProfile()
    {
        $params = $this->request->all();
        $result = [
            "access_token"=>"werwefsdfsd",
            "display_name"=>"sdfsdfsdf",
            "channels"=>[
                "FOX",
                "FOX",
                "FOX"
            ]
        ];

        return $this->response->json($result);
    }

    /**
     * @RequestMapping(path="/user/logout", methods="get,post")
     */
    public function userLogout()
    {
        $params = $this->request->all();
        $result = [];

        return $this->response->json($result);
    }

    /**
     * @RequestMapping(path="/user/login", methods="get,post")
     */
    public function userLogin()
    {
        $params = $this->request->all();
        $result = [
            "access_token"=>"sdfwwer",
            "display_name"=>"sdfwwer",
            "channels"=>[
                "FOX",
                "FOX",
                "FOX"
            ]
        ];

        return $this->response->json($result);
    }

    /**
     * @RequestMapping(path="categories", methods="get,post")
     */
    public function categories()
    {
        $params = $this->request->all();
        $result = [
            [
                "code"=>"sdfwwer",
                "title"=>"Latest"
            ],
            [
                "code"=>"sdfwwer",
                "title"=>"Latest"
            ],
            [
                "code"=>"sdfwwer",
                "title"=>"Latest"
            ],
            [
                "code"=>"sdfwwer",
                "title"=>"Latest"
            ],
            [
                "code"=>"sdfwwer",
                "title"=>"Latest"
            ],
            [
                "code"=>"sdfwwer",
                "title"=>"Latest"
            ],
            [
                "code"=>"sdfwwer",
                "title"=>"Latest"
            ],
            
        ];

        return $this->response->json($result);
    }

    /**
     * @RequestMapping(path="/news/recommend", methods="get,post")
     */
    public function newsRecommend()
    {
        $params = $this->request->all();
        $result = [
            "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
            "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
            "category"=>"mobile",
            "addtime"=>"2020-07-07 12:00:00",
            "author"=>"sdfwwer",
            "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html",
            "id"=>"sdfwwer"
        ];

        return $this->response->json($result);
    }

    /**
     * @RequestMapping(path="/news/content/{cid}", methods="get,post")
     */
    public function newsContent($id)
    {
        $params = $this->request->all();
        $result = [];

        return $this->response->json($result);
    }

    /**
     * @RequestMapping(path="/news", methods="get,post")
     */
    public function news()
    {
        $params = $this->request->all();
        $result = [
            "counts"=>20,
            "pagesize"=>5,
            "pages"=>1,
            "page"=>1,
            "items"=>[
                [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ],
               [
                    "id"=>"sdfwwer",
                    "title"=>"Huawei P40 Pro may feature 50X zoom, custom photography chip",
                    "category"=>"mobile",
                    "thumbnail"=>"https://s.yimg.com/uu/api/res/1.2/vXVSOyMkqqgOOlOQ3JAPcw--~B/Zmk9ZmlsbDtweW9mZj0wO3c9NjQwO2g9NDIxO2FwcGlkPXl0YWNoeW9u/https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/a3c4873e97272b518d4a46c1696ce36f51a084fb/cXVhbGl0eT04NSZpbWFnZV91cmk9aHR0cHMlM0ElMkYlMkZvLmFvbGNkbi5jb20lMkZpbWFnZXMlMkZkaW1zJTNGY3JvcCUzRDE2MDAlMjUyQzEwNjclMjUyQzAlMjUyQzAlMjZxdWFsaXR5JTNEODUlMjZmb3JtYXQlM0RqcGclMjZyZXNpemUlM0QxNjAwJTI1MkMxMDY3JTI2aW1hZ2VfdXJpJTNEaHR0cHMlMjUzQSUyNTJGJTI1MkZzLnlpbWcuY29tJTI1MkZvcyUyNTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyNTJGMjAyMC0wMyUyNTJGMjMzOGFhMDAtNWQ3ZS0xMWVhLWFmZDMtOTgzMmIxNjVmNDNjJTI2Y2xpZW50JTNEYTFhY2FjM2UxYjMyOTA5MTdkOTIlMjZzaWduYXR1cmUlM0QwNDYzODQ3MTA5NWJmYzdmOWIwYWQ0ZTcyZjM1ODAxYTk1NjI2M2QyJmNsaWVudD1hbXAtYmxvZ3NpZGUtdjImc2lnbmF0dXJlPTNmN2RlOGJlOGY2NGU5MzA2NjE4NzY2OTNjMWVlZDRkOTEzNDYwZTY=",
                    "author"=>"sdfwwer",
                    "addtime"=>"2020-07-07 12:00:00",
                    "url"=>"https://cn.engadget.com/cn-2020-03-03-apple-14-inch-macbook-pro-mini-led.html"
                ]
            ]
        ];

        return $this->response->json($result);
    }

    /**
     * @RequestMapping(path="/tags", methods="get,post")
     */
    public function tags()
    {
        $params = $this->request->all();
        $result = [
            [
                "tag"=>"apple"
            ],
            [
                "tag"=>"apple"
            ],
            [
                "tag"=>"apple"
            ],
            [
                "tag"=>"apple"
            ],
            [
                "tag"=>"apple"
            ],
            [
                "tag"=>"apple"
            ],
            [
                "tag"=>"apple"
            ],
            [
                "tag"=>"apple"
            ],
            [
                "tag"=>"apple"
            ],
            [
                "tag"=>"apple"
            ]
        ];

        return $this->response->json($result);
    }

    /**
     * @RequestMapping(path="/channels", methods="get,post")
     */
    public function channels()
    {
        $params = $this->request->all();
        $result = [
            [
                "code"=>"bbc",
                "title"=>"bbc"
            ],
            [
                "code"=>"bbc",
                "title"=>"bbc"
            ],
            [
                "code"=>"bbc",
                "title"=>"bbc"
            ],
            [
                "code"=>"bbc",
                "title"=>"bbc"
            ],
            [
                "code"=>"bbc",
                "title"=>"bbc"
            ],
            [
                "code"=>"bbc",
                "title"=>"bbc"
            ],
            [
                "code"=>"bbc",
                "title"=>"bbc"
            ],
            [
                "code"=>"bbc",
                "title"=>"bbc"
            ],
            [
                "code"=>"bbc",
                "title"=>"bbc"
            ],
            [
                "code"=>"bbc",
                "title"=>"bbc"
            ]
        ];

        return $this->response->json($result);
    }

}