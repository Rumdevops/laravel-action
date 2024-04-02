<?php

namespace Tests\Browser;

use App\Models\OddTable;
use Carbon\Carbon;
use Exception;
use Facebook\WebDriver\WebDriverBy;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class crawlOddTableTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->testCrawlDataAndSaveToDatabase();
    }

    public function testCrawlDataAndSaveToDatabase()
    {

        try {
            $this->browse(function (Browser $browser) {
                $browser->visit('https://e143ob.bnw2253.com/(S(xideqseTe1Q9n4ezvuhg4sodlcgjchybkx5ioODxtTUd11pgvd-2o79Ol7gZZ))/Newindex?LoginUrl=https%3A%2F%2Fwww.fb88epl.com%2Fvi-VN%2FAccount%2FLogin&OType=4&homeUrl=https%3A%2F%2Fwww.fb88epl.com%2Fvi-VN&lang=vn&signupUrl=https%3A%2F%2Fwww.fb88epl.com%2Fvi-VN%2FAccount%2FRegister');

                $browser->withinFrame('iframe#sportsFrame', function (Browser $browser) {
                    $browser->pause(3000);
                    // $browser->waitFor('#leftBar [title="Tỷ Số Chính Xác"]', 10000);
                    // $browser->click('#leftBar [title="Tỷ Số Chính Xác"]');

                    $browser->waitFor('.c-odds-table', 10000);
                    $leagueTables = $browser->elements('.c-odds-table');

                    foreach ($leagueTables as $leagueTable) {
                        $elements = $leagueTable->findElements(WebDriverBy::className('c-league'));
                        foreach ($elements as $element) {
                            $leagueName = $element->findElement(WebDriverBy::className('c-league__name'))->getText();
                            $browser->waitFor('.c-match', 10000);
                            $matches = $element->findElements(WebDriverBy::className('c-match'));

                            foreach ($matches as $match) {
                                $timerElements = $match->findElements(WebDriverBy::xpath('.//div[@class="c-match__timer"]'));
                                $timerData = explode("\n", $timerElements[0]->getText());
                                $timer = implode(' ', array_slice($timerData, 1));

                                if (strpos($timer, 'PM') !== false || strpos($timer, 'AM') !== false) {
                                    $carbonTime = Carbon::createFromFormat('h:iA', $timer);
                                    if ($carbonTime !== false) {
                                        $timestamp = $carbonTime->timestamp;
                                        $startDate = date('Y-m-d H:i:s', $timestamp);
                                    } else {
                                        $startDate = null;
                                    }
                                    $timer = '';
                                } elseif (strpos($timer, 'H') !== false || strpos($timer, 'Time') !== false  || strpos($timer, 'TRỰC TIẾP') !== false) {
                                    $startDate = null;
                                } else {
                                    $startDate = null;
                                }
                                $score = $timerData[0];
                                if (!preg_match('/^\d+-\d+$/', $score)) {
                                    $score = 0;
                                }

                                $teams = $match->findElements(WebDriverBy::className('c-team'));
                                $home_team = $teams[0]->findElement(WebDriverBy::className('c-team-name'))->getText();
                                $away_team = $teams[1]->findElement(WebDriverBy::className('c-team-name'))->getText();

                                $bettingRatesElements = $match->findElements(WebDriverBy::className('c-bettype-col'));
                                $bettingRates = [];
                                foreach ($bettingRatesElements as $bettingRateElement) {
                                    $bettingRate = $bettingRateElement->getText();
                                    $rates = explode("\n", $bettingRate);
                                    $bettingRates[] = $rates;
                                }
                                $itemData = [
                                    'tournament_name' => $leagueName,
                                    'fulltime' => $timer ? $timer : '',
                                    'startDate' => $startDate ? $startDate : null,
                                    'score_fulltime' => $score ? $score : '',
                                    'home_team' => $home_team,
                                    'away_team' => $away_team,
                                    'odd_details' => null,
                                    'choose_team_fulltime' => isset ($bettingRates[0]) ? json_encode([
                                        'ratioDrew' => isset ($bettingRates[0][0]) ? floatval($bettingRates[0][0]) : '',
                                        'ratioWin' => isset ($bettingRates[0][1]) ? floatval($bettingRates[0][1]) : '',
                                        'ratioLose' => isset ($bettingRates[0][2]) ? floatval($bettingRates[0][2]) : '',
                                    ]) : '',
                                    'ratioFulltime' => isset ($bettingRates[1]) ? json_encode([
                                        'handicap' => isset ($bettingRates[1][0]) ? floatval($bettingRates[1][0]) : '',
                                        'ratioWin' => isset ($bettingRates[1][1]) ? floatval($bettingRates[1][1]) : '',
                                        'ratioLose' => isset ($bettingRates[1][2]) ? floatval($bettingRates[1][2]) : '',
                                    ]) : '',
                                    'topUnderfulltime' => isset ($bettingRates[2]) ? json_encode([
                                        'handicap' => isset ($bettingRates[2][0]) ? floatval($bettingRates[2][0]) : '',
                                        'ratioTop' => isset ($bettingRates[2][1]) ? floatval($bettingRates[2][1]) : '',
                                        'ratioUnder' => isset ($bettingRates[2][3]) ? floatval($bettingRates[2][3]) : '',
                                    ]) : '',
                                    'choose_team_half' => isset ($bettingRates[3]) ? json_encode([
                                        'ratioDrew' => isset ($bettingRates[3][0]) ? floatval($bettingRates[3][0]) : '',
                                        'ratioWin' => isset ($bettingRates[3][1]) ? floatval($bettingRates[3][1]) : '',
                                        'ratioLose' => isset ($bettingRates[3][2]) ? floatval($bettingRates[3][2]) : '',
                                    ]) : '',
                                    'ratiohalf' => isset ($bettingRates[4]) ? json_encode([
                                        'handicap' => isset ($bettingRates[4][0]) ? floatval($bettingRates[4][0]) : '',
                                        'ratioWin' => isset ($bettingRates[4][1]) ? floatval($bettingRates[4][1]) : '',
                                        'ratioLose' => isset ($bettingRates[4][2]) ? floatval($bettingRates[4][2]) : '',
                                    ]) : '',
                                    'topUnderhalf' => isset ($bettingRates[5]) ? json_encode([
                                        'handicap' => isset ($bettingRates[5][0]) ? floatval($bettingRates[5][0]) : '',
                                        'ratioTop' => isset ($bettingRates[5][1]) ? floatval($bettingRates[5][1]) : '',
                                        'ratioUnder' => isset ($bettingRates[5][3]) ? floatval($bettingRates[5][3]) : '',
                                    ]) : '',
                                ];
                                OddTable::create($itemData);
                            }
                        }
                    }
                });
            });
        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }
}
