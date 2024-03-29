<?php

namespace TallmanCode\DevaliciousBundle\Tests\Api\Movie;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use TallmanCode\HollywoodBundle\Client\HollywoodClient;
use TallmanCode\HollywoodBundle\Model\Movie;
use TallmanCode\HollywoodBundle\Response\PaginatedResponse;
use TallmanCode\HollywoodBundle\Test\HollywoodTestKernel;

class GetTopRatedTest extends WebTestCase
{
    public function testGetTopRated()
    {
        $kernel = new HollywoodTestKernel('test', true);
        $kernel->boot();
        $container = $kernel->getContainer();
        $mockResponse = new MockResponse(json_encode($this->getPaginatedResponse()), ['http_code' => 200]);
        $mockHttpClient = new MockHttpClient([$mockResponse]);
        $response = $mockHttpClient->request('GET', 'https://api.themoviedb.org/3/movie/top_rated');
        $mockHollywoodClient = $this->createMock(HollywoodClient::class);
        $mockHollywoodClient->expects($this->once())
            ->method('send')
            ->willReturn($response);
        $container->set('hollywood.client', $mockHollywoodClient);
        $hollywoodManager = $container->get('hollywood.manager');
        $hollywoodManagerResponse = $hollywoodManager->movies()->getTopRated();
        $this->assertInstanceOf(PaginatedResponse::class, $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('page', $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('results', $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('totalPages', $hollywoodManagerResponse);
        $this->assertObjectHasAttribute('totalResults', $hollywoodManagerResponse);
        $this->assertInstanceOf(Movie::class, $hollywoodManagerResponse->getResults()[0]);
    }

    private function getPaginatedResponse()
    {
        return [
            'page' => 1,
            'results' =>
                [
                    0 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/rSPw7tgCH9c6NqICZef4kZjFOQ5.jpg',
                            'genre_ids' =>
                                [
                                    0 => 18,
                                    1 => 80,
                                ],
                            'id' => 238,
                            'original_language' => 'en',
                            'original_title' => 'The Godfather',
                            'overview' => 'Spanning the years 1945 to 1955, a chronicle of the fictional Italian-American Corleone crime family. When organized crime family patriarch, Vito Corleone barely survives an attempt on his life, his youngest son, Michael steps in to take care of the would-be killers, launching a campaign of bloody revenge.',
                            'popularity' => 100.646,
                            'poster_path' => '/3bhkrj58Vtu7enYsRolD1fZdja1.jpg',
                            'release_date' => '1972-03-14',
                            'title' => 'The Godfather',
                            'video' => false,
                            'vote_average' => 8.7,
                            'vote_count' => 16621,
                        ],
                    1 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/kXfqcdQKsToO0OUXHcrrNCHDBzO.jpg',
                            'genre_ids' =>
                                [
                                    0 => 18,
                                    1 => 80,
                                ],
                            'id' => 278,
                            'original_language' => 'en',
                            'original_title' => 'The Shawshank Redemption',
                            'overview' => 'Framed in the 1940s for the double murder of his wife and her lover, upstanding banker Andy Dufresne begins a new life at the Shawshank prison, where he puts his accounting skills to work for an amoral warden. During his long stretch in prison, Dufresne comes to be admired by the other inmates -- including an older prisoner named Red -- for his integrity and unquenchable sense of hope.',
                            'popularity' => 85.63,
                            'poster_path' => '/q6y0Go1tsGEsmtFryDOJo3dEmqu.jpg',
                            'release_date' => '1994-09-23',
                            'title' => 'The Shawshank Redemption',
                            'video' => false,
                            'vote_average' => 8.7,
                            'vote_count' => 22340,
                        ],
                    2 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/kGzFbGhp99zva6oZODW5atUtnqi.jpg',
                            'genre_ids' =>
                                [
                                    0 => 18,
                                    1 => 80,
                                ],
                            'id' => 240,
                            'original_language' => 'en',
                            'original_title' => 'The Godfather Part II',
                            'overview' => 'In the continuing saga of the Corleone crime family, a young Vito Corleone grows up in Sicily and in 1910s New York. In the 1950s, Michael Corleone attempts to expand the family business into Las Vegas, Hollywood and Cuba.',
                            'popularity' => 66.134,
                            'poster_path' => '/hek3koDUyRQk7FIhPXsa6mT2Zc3.jpg',
                            'release_date' => '1974-12-20',
                            'title' => 'The Godfather Part II',
                            'video' => false,
                            'vote_average' => 8.6,
                            'vote_count' => 10053,
                        ],
                    3 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/vI3aUGTuRRdM7J78KIdW98LdxE5.jpg',
                            'genre_ids' =>
                                [
                                    0 => 35,
                                    1 => 18,
                                    2 => 10749,
                                ],
                            'id' => 19404,
                            'original_language' => 'hi',
                            'original_title' => 'दिलवाले दुल्हनिया ले जायेंगे',
                            'overview' => 'Raj is a rich, carefree, happy-go-lucky second generation NRI. Simran is the daughter of Chaudhary Baldev Singh, who in spite of being an NRI is very strict about adherence to Indian values. Simran has left for India to be married to her childhood fiancé. Raj leaves for India with a mission at his hands, to claim his lady love under the noses of her whole family. Thus begins a saga.',
                            'popularity' => 33.388,
                            'poster_path' => '/2CAL2433ZeIihfX1Hb2139CX0pW.jpg',
                            'release_date' => '1995-10-19',
                            'title' => 'Dilwale Dulhania Le Jayenge',
                            'video' => false,
                            'vote_average' => 8.6,
                            'vote_count' => 3880,
                        ],
                    4 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/zb6fM1CX41D9rF9hdgclu0peUmy.jpg',
                            'genre_ids' =>
                                [
                                    0 => 18,
                                    1 => 36,
                                    2 => 10752,
                                ],
                            'id' => 424,
                            'original_language' => 'en',
                            'original_title' => 'Schindler\'s List',
                            'overview' => 'The true story of how businessman Oskar Schindler saved over a thousand Jewish lives from the Nazis while they worked as slaves in his factory during World War II.',
                            'popularity' => 64.74,
                            'poster_path' => '/sF1U4EUQS8YHUYjNl3pMGNIQyr0.jpg',
                            'release_date' => '1993-12-15',
                            'title' => 'Schindler\'s List',
                            'video' => false,
                            'vote_average' => 8.6,
                            'vote_count' => 13250,
                        ],
                    5 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/bxSBOAD8AuMHYMdW3jso9npAkgt.jpg',
                            'genre_ids' =>
                                [
                                    0 => 10751,
                                    1 => 18,
                                ],
                            'id' => 667257,
                            'original_language' => 'es',
                            'original_title' => 'Cosas imposibles',
                            'overview' => 'Matilde is a woman who, after the death of her husband - a man who constantly abused her - finds her new best friend in Miguel, her young, insecure, disoriented and even dealer neighbor',
                            'popularity' => 17.875,
                            'poster_path' => '/t2Ew8NZ8Ci2kqmoecZUNQUFDJnQ.jpg',
                            'release_date' => '2021-06-17',
                            'title' => 'Impossible Things',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 269,
                        ],
                    6 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/Ab8mkHmkYADjU7wQiOkia9BzGvS.jpg',
                            'genre_ids' =>
                                [
                                    0 => 16,
                                    1 => 10751,
                                    2 => 14,
                                ],
                            'id' => 129,
                            'original_language' => 'ja',
                            'original_title' => '千と千尋の神隠し',
                            'overview' => 'A young girl, Chihiro, becomes trapped in a strange new world of spirits. When her parents undergo a mysterious transformation, she must call upon the courage she never knew she had to free her family.',
                            'popularity' => 111.266,
                            'poster_path' => '/39wmItIWsg5sZMyRUHLkWBcuVCM.jpg',
                            'release_date' => '2001-07-20',
                            'title' => 'Spirited Away',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 13368,
                        ],
                    7 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/mMtUybQ6hL24FXo0F3Z4j2KG7kZ.jpg',
                            'genre_ids' =>
                                [
                                    0 => 10749,
                                    1 => 16,
                                    2 => 18,
                                ],
                            'id' => 372058,
                            'original_language' => 'ja',
                            'original_title' => '君の名は。',
                            'overview' => 'High schoolers Mitsuha and Taki are complete strangers living separate lives. But one night, they suddenly switch places. Mitsuha wakes up in Taki’s body, and he in hers. This bizarre occurrence continues to happen randomly, and the two must adjust their lives around each other.',
                            'popularity' => 191.279,
                            'poster_path' => '/q719jXXEzOoYaps6babgKnONONX.jpg',
                            'release_date' => '2016-08-26',
                            'title' => 'Your Name.',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 9081,
                        ],
                    8 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/qqHQsStV6exghCM7zbObuYBiYxw.jpg',
                            'genre_ids' =>
                                [
                                    0 => 18,
                                ],
                            'id' => 389,
                            'original_language' => 'en',
                            'original_title' => '12 Angry Men',
                            'overview' => 'The defense and the prosecution have rested and the jury is filing into the jury room to decide if a young Spanish-American is guilty or innocent of murdering his father. What begins as an open and shut case soon becomes a mini-drama of each of the jurors\' prejudices and preconceptions about the trial, the accused, and each other.',
                            'popularity' => 28.439,
                            'poster_path' => '/ppd84D2i9W8jXmsyInGyihiSyqz.jpg',
                            'release_date' => '1957-04-10',
                            'title' => '12 Angry Men',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 6676,
                        ],
                    9 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/TU9NIjwzjoKPwQHoHshkFcQUCG.jpg',
                            'genre_ids' =>
                                [
                                    0 => 35,
                                    1 => 53,
                                    2 => 18,
                                ],
                            'id' => 496243,
                            'original_language' => 'ko',
                            'original_title' => '기생충',
                            'overview' => 'All unemployed, Ki-taek\'s family takes peculiar interest in the wealthy and glamorous Parks for their livelihood until they get entangled in an unexpected incident.',
                            'popularity' => 89.241,
                            'poster_path' => '/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg',
                            'release_date' => '2019-05-30',
                            'title' => 'Parasite',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 14431,
                        ],
                    10 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/jtAI6OJIWLWiRItNSZoWjrsUtmi.jpg',
                            'genre_ids' =>
                                [
                                    0 => 10749,
                                ],
                            'id' => 724089,
                            'original_language' => 'en',
                            'original_title' => 'Gabriel\'s Inferno: Part II',
                            'overview' => 'Professor Gabriel Emerson finally learns the truth about Julia Mitchell\'s identity, but his realization comes a moment too late. Julia is done waiting for the well-respected Dante specialist to remember her and wants nothing more to do with him. Can Gabriel win back her heart before she finds love in another\'s arms?',
                            'popularity' => 13.284,
                            'poster_path' => '/x5o8cLZfEXMoZczTYWLrUo1P7UJ.jpg',
                            'release_date' => '2020-07-31',
                            'title' => 'Gabriel\'s Inferno: Part II',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 1438,
                        ],
                    11 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/w2uGvCpMtvRqZg6waC1hvLyZoJa.jpg',
                            'genre_ids' =>
                                [
                                    0 => 10749,
                                ],
                            'id' => 696374,
                            'original_language' => 'en',
                            'original_title' => 'Gabriel\'s Inferno',
                            'overview' => 'An intriguing and sinful exploration of seduction, forbidden love, and redemption, Gabriel\'s Inferno is a captivating and wildly passionate tale of one man\'s escape from his own personal hell as he tries to earn the impossible--forgiveness and love.',
                            'popularity' => 13.117,
                            'poster_path' => '/oyG9TL7FcRP4EZ9Vid6uKzwdndz.jpg',
                            'release_date' => '2020-05-29',
                            'title' => 'Gabriel\'s Inferno',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 2286,
                        ],
                    12 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/3RMLbSEXOn1CzLoNT7xFeLfdxhq.jpg',
                            'genre_ids' =>
                                [
                                    0 => 10749,
                                    1 => 16,
                                ],
                            'id' => 372754,
                            'original_language' => 'ja',
                            'original_title' => '同級生',
                            'overview' => 'Rihito Sajo, an honor student with a perfect score on the entrance exam and Hikaru Kusakabe, in a band and popular among girls, would have never crossed paths. Until one day they started talking at the practice for their school’s upcoming chorus festival. After school, the two meet regularly, as Hikaru helps Rihito to improve his singing skills. While they listen to each other’s voice and harmonize, their hearts start to beat together.',
                            'popularity' => 15.9,
                            'poster_path' => '/cIfRCA5wEvj9tApca4UDUagQEiM.jpg',
                            'release_date' => '2016-02-20',
                            'title' => 'Dou kyu sei – Classmates',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 257,
                        ],
                    13 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/l6hQWH9eDksNJNiXWYRkWqikOdu.jpg',
                            'genre_ids' =>
                                [
                                    0 => 14,
                                    1 => 18,
                                    2 => 80,
                                ],
                            'id' => 497,
                            'original_language' => 'en',
                            'original_title' => 'The Green Mile',
                            'overview' => 'A supernatural tale set on death row in a Southern prison, where gentle giant John Coffey possesses the mysterious power to heal people\'s ailments. When the cell block\'s head guard, Paul Edgecomb, recognizes Coffey\'s miraculous gift, he tries desperately to help stave off the condemned man\'s execution.',
                            'popularity' => 112.029,
                            'poster_path' => '/velWPhVMQeQKcxggNEU8YmIo52R.jpg',
                            'release_date' => '1999-12-10',
                            'title' => 'The Green Mile',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 14424,
                        ],
                    14 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/nMKdUUepR0i5zn0y1T4CsSB5chy.jpg',
                            'genre_ids' =>
                                [
                                    0 => 18,
                                    1 => 28,
                                    2 => 80,
                                    3 => 53,
                                ],
                            'id' => 155,
                            'original_language' => 'en',
                            'original_title' => 'The Dark Knight',
                            'overview' => 'Batman raises the stakes in his war on crime. With the help of Lt. Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as the Joker.',
                            'popularity' => 114.004,
                            'poster_path' => '/qJ2tW6WMUDux911r6m7haRef0WH.jpg',
                            'release_date' => '2008-07-14',
                            'title' => 'The Dark Knight',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 28288,
                        ],
                    15 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/v5CEt88iDsuoMaW1Q5Msu9UZdEt.jpg',
                            'genre_ids' =>
                                [
                                    0 => 10749,
                                    1 => 18,
                                ],
                            'id' => 730154,
                            'original_language' => 'ja',
                            'original_title' => 'きみの瞳が問いかけている',
                            'overview' => 'A tragic accident lead to Kaori\'s blindness, but she clings to life and the smaller pleasures it can still afford her. She meets Rui and begins to talk to him. Rui was once a promising kickboxer, but something happened in his past. Kaori\'s smile brings out a change in Rui. However, the two are connected in more than one way. Rui attempts to do what is right.',
                            'popularity' => 47.287,
                            'poster_path' => '/cVn8E3Fxbi8HzYYtaSfsblYC4gl.jpg',
                            'release_date' => '2020-10-23',
                            'title' => 'Your Eyes Tell',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 353,
                        ],
                    16 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/aQ7444JX7gefPhGJTlvilj3zG2S.jpg',
                            'genre_ids' =>
                                [
                                    0 => 10402,
                                ],
                            'id' => 553512,
                            'original_language' => 'ko',
                            'original_title' => '번 더 스테이지: 더 무비',
                            'overview' => 'A documentary following the worldwide famous music group BTS, as they tour the world and share their experience along with their beloved band friends and fans.',
                            'popularity' => 33.479,
                            'poster_path' => '/pJKy1yvnKh8UjcuYeG3Rt35xHFA.jpg',
                            'release_date' => '2018-11-15',
                            'title' => 'Burn the Stage: The Movie',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 365,
                        ],
                    17 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/suaEOtk1N1sgg2MTM7oZd2cfVp3.jpg',
                            'genre_ids' =>
                                [
                                    0 => 53,
                                    1 => 80,
                                ],
                            'id' => 680,
                            'original_language' => 'en',
                            'original_title' => 'Pulp Fiction',
                            'overview' => 'A burger-loving hit man, his philosophical partner, a drug-addled gangster\'s moll and a washed-up boxer converge in this sprawling, comedic crime caper. Their adventures unfurl in three stories that ingeniously trip back and forth in time.',
                            'popularity' => 65.338,
                            'poster_path' => '/fIE3lAGcZDV1G6XM5KmuWnNsPp1.jpg',
                            'release_date' => '1994-09-10',
                            'title' => 'Pulp Fiction',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 23807,
                        ],
                    18 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/x4biAVdPVCghBlsVIzB6NmbghIz.jpg',
                            'genre_ids' =>
                                [
                                    0 => 37,
                                ],
                            'id' => 429,
                            'original_language' => 'it',
                            'original_title' => 'Il buono, il brutto, il cattivo',
                            'overview' => 'While the Civil War rages on between the Union and the Confederacy, three men – a quiet loner, a ruthless hitman, and a Mexican bandit – comb the American Southwest in search of a strongbox containing $200,000 in stolen gold.',
                            'popularity' => 56.418,
                            'poster_path' => '/bX2xnavhMYjWDoZp1VM6VnU1xwe.jpg',
                            'release_date' => '1966-12-23',
                            'title' => 'The Good, the Bad and the Ugly',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 6872,
                        ],
                    19 =>
                        [
                            'adult' => false,
                            'backdrop_path' => '/lXhgCODAbBXL5buk9yEmTpOoOgR.jpg',
                            'genre_ids' =>
                                [
                                    0 => 12,
                                    1 => 14,
                                    2 => 28,
                                ],
                            'id' => 122,
                            'original_language' => 'en',
                            'original_title' => 'The Lord of the Rings: The Return of the King',
                            'overview' => 'Aragorn is revealed as the heir to the ancient kings as he, Gandalf and the other members of the broken fellowship struggle to save Gondor from Sauron\'s forces. Meanwhile, Frodo and Sam take the ring closer to the heart of Mordor, the dark lord\'s realm.',
                            'popularity' => 214.196,
                            'poster_path' => '/rCzpDGLbOoPwLjy3OAm5NUPOTrC.jpg',
                            'release_date' => '2003-12-01',
                            'title' => 'The Lord of the Rings: The Return of the King',
                            'video' => false,
                            'vote_average' => 8.5,
                            'vote_count' => 20217,
                        ],
                ],
            'total_pages' => 517,
            'total_results' => 10329,
        ];
    }
}

