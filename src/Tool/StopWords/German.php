<?php
/**
 * PHP Science TextRank (http://php.science/)
 *
 * @see     https://github.com/doveid/php-science-textrank
 * @license https://opensource.org/licenses/MIT the MIT License
 * @author  David Belicza <87.bdavid@gmail.com>
 */
declare(strict_types=1);
namespace PhpScience\TextRank\Tool\StopWords;
/**
 * Class German
 *
 * @package PhpScience\TextRank\Tool\StopWords
 */
class German extends StopWordsAbstract
{
    /**
     * Stop words for avoid dummy keywords for Language German.
     * Word list created by Marco Götze, Steffen Geyer.
     * Source: https://solariz.de/de/downloads/6/german-enhanced-stopwords.htm
     *
     * @var array
     */
    protected $words = [
        'ab',
        'aber',
        'alle',
        'allein',
        'allem',
        'allen',
        'aller',
        'allerdings',
        'allerlei',
        'alles',
        'allmählich',
        'allzu',
        'als',
        'alsbald',
        'also',
        'am',
        'an',
        'and',
        'ander',
        'andere',
        'anderem',
        'anderen',
        'anderer',
        'andererseits',
        'anderes',
        'anderm',
        'andern',
        'andernfalls',
        'anders',
        'anstatt',
        'auch',
        'auf',
        'aus',
        'ausgenommen',
        'ausser',
        'ausserdem',
        'außer',
        'außerdem',
        'außerhalb',
        'bald',
        'bei',
        'beide',
        'beiden',
        'beiderlei',
        'beides',
        'beim',
        'beinahe',
        'bereits',
        'besonders',
        'besser',
        'beträchtlich',
        'bevor',
        'bezüglich',
        'bin',
        'bis',
        'bisher',
        'bislang',
        'bist',
        'bloß',
        'bsp.',
        'bzw',
        'ca',
        'ca.',
        'content',
        'da',
        'dabei',
        'dadurch',
        'dafür',
        'dagegen',
        'daher',
        'dahin',
        'damals',
        'damit',
        'danach',
        'daneben',
        'dann',
        'daran',
        'darauf',
        'daraus',
        'darin',
        'darum',
        'darunter',
        'darüber',
        'darüberhinaus',
        'das',
        'dass',
        'dasselbe',
        'davon',
        'davor',
        'dazu',
        'daß',
        'dein',
        'deine',
        'deinem',
        'deinen',
        'deiner',
        'deines',
        'dem',
        'demnach',
        'demselben',
        'den',
        'denen',
        'denn',
        'dennoch',
        'denselben',
        'der',
        'derart',
        'derartig',
        'derem',
        'deren',
        'derer',
        'derjenige',
        'derjenigen',
        'derselbe',
        'derselben',
        'derzeit',
        'des',
        'deshalb',
        'desselben',
        'dessen',
        'desto',
        'deswegen',
        'dich',
        'die',
        'diejenige',
        'dies',
        'diese',
        'dieselbe',
        'dieselben',
        'diesem',
        'diesen',
        'dieser',
        'dieses',
        'diesseits',
        'dir',
        'direkt',
        'direkte',
        'direkten',
        'direkter',
        'doch',
        'dort',
        'dorther',
        'dorthin',
        'drauf',
        'drin',
        'drunter',
        'drüber',
        'du',
        'dunklen',
        'durch',
        'durchaus',
        'eben',
        'ebenfalls',
        'ebenso',
        'eher',
        'eigenen',
        'eigenes',
        'eigentlich',
        'ein',
        'eine',
        'einem',
        'einen',
        'einer',
        'einerseits',
        'eines',
        'einfach',
        'einführen',
        'einführte',
        'einführten',
        'eingesetzt',
        'einig',
        'einige',
        'einigem',
        'einigen',
        'einiger',
        'einigermaßen',
        'einiges',
        'einmal',
        'eins',
        'einseitig',
        'einseitige',
        'einseitigen',
        'einseitiger',
        'einst',
        'einstmals',
        'einzig',
        'entsprechend',
        'entweder',
        'er',
        'erst',
        'es',
        'etc',
        'etliche',
        'etwa',
        'etwas',
        'euch',
        'euer',
        'eure',
        'eurem',
        'euren',
        'eurer',
        'eures',
        'falls',
        'fast',
        'ferner',
        'folgende',
        'folgenden',
        'folgender',
        'folgendes',
        'folglich',
        'fuer',
        'für',
        'gab',
        'ganze',
        'ganzem',
        'ganzen',
        'ganzer',
        'ganzes',
        'gar',
        'gegen',
        'gemäss',
        'ggf',
        'gleich',
        'gleichwohl',
        'gleichzeitig',
        'glücklicherweise',
        'gänzlich',
        'hab',
        'habe',
        'haben',
        'haette',
        'hast',
        'hat',
        'hatte',
        'hatten',
        'hattest',
        'hattet',
        'heraus',
        'herein',
        'hier',
        'hier',
        'hinter',
        'hiermit',
        'hiesige',
        'hin',
        'hinein',
        'hinten',
        'hinter',
        'hinterher',
        'http',
        'hätt',
        'hätte',
        'hätten',
        'höchstens',
        'ich',
        'igitt',
        'ihm',
        'ihn',
        'ihnen',
        'ihr',
        'ihre',
        'ihrem',
        'ihren',
        'ihrer',
        'ihres',
        'im',
        'immer',
        'immerhin',
        'in',
        'indem',
        'indessen',
        'infolge',
        'innen',
        'innerhalb',
        'ins',
        'insofern',
        'inzwischen',
        'irgend',
        'irgendeine',
        'irgendwas',
        'irgendwen',
        'irgendwer',
        'irgendwie',
        'irgendwo',
        'ist',
        'ja',
        'je',
        'jed',
        'jede',
        'jedem',
        'jeden',
        'jedenfalls',
        'jeder',
        'jederlei',
        'jedes',
        'jedoch',
        'jemand',
        'jene',
        'jenem',
        'jenen',
        'jener',
        'jenes',
        'jenseits',
        'jetzt',
        'jährig',
        'jährige',
        'jährigen',
        'jähriges',
        'kam',
        'kann',
        'kannst',
        'kaum',
        'kein',
        'keine',
        'keinem',
        'keinen',
        'keiner',
        'keinerlei',
        'keines',
        'keineswegs',
        'klar',
        'klare',
        'klaren',
        'klares',
        'klein',
        'kleinen',
        'kleiner',
        'kleines',
        'koennen',
        'koennt',
        'koennte',
        'koennten',
        'komme',
        'kommen',
        'kommt',
        'konkret',
        'konkrete',
        'konkreten',
        'konkreter',
        'konkretes',
        'können',
        'könnt',
        'künftig',
        'leider',
        'machen',
        'man',
        'manche',
        'manchem',
        'manchen',
        'mancher',
        'mancherorts',
        'manches',
        'manchmal',
        'mehr',
        'mehrere',
        'mein',
        'meine',
        'meinem',
        'meinen',
        'meiner',
        'meines',
        'mich',
        'mir',
        'mit',
        'mithin',
        'muessen',
        'muesst',
        'muesste',
        'muss',
        'musst',
        'musste',
        'mussten',
        'muß',
        'mußt',
        'müssen',
        'müsste',
        'müssten',
        'müßt',
        'müßte',
        'nach',
        'nachdem',
        'nachher',
        'nachhinein',
        'nahm',
        'natürlich',
        'neben',
        'nebenan',
        'nehmen',
        'nein',
        'nicht',
        'nichts',
        'nie',
        'niemals',
        'niemand',
        'nirgends',
        'nirgendwo',
        'noch',
        'nun',
        'nur',
        'nächste',
        'nämlich',
        'nötigenfalls',
        'ob',
        'oben',
        'oberhalb',
        'obgleich',
        'obschon',
        'obwohl',
        'oder',
        'oft',
        'per',
        'plötzlich',
        'schließlich',
        'schon',
        'sehr',
        'sehrwohl',
        'seid',
        'sein',
        'seine',
        'seinem',
        'seinen',
        'seiner',
        'seines',
        'seit',
        'seitdem',
        'seither',
        'selber',
        'selbst',
        'sich',
        'sicher',
        'sicherlich',
        'sie',
        'sind',
        'so',
        'sobald',
        'sodass',
        'sodaß',
        'soeben',
        'sofern',
        'sofort',
        'sogar',
        'solange',
        'solch',
        'solche',
        'solchem',
        'solchen',
        'solcher',
        'solches',
        'soll',
        'sollen',
        'sollst',
        'sollt',
        'sollte',
        'sollten',
        'solltest',
        'somit',
        'sondern',
        'sonst',
        'sonstwo',
        'sooft',
        'soviel',
        'soweit',
        'sowie',
        'sowohl',
        'tatsächlich',
        'tatsächlichen',
        'tatsächlicher',
        'tatsächliches',
        'trotzdem',
        'ueber',
        'um',
        'umso',
        'unbedingt',
        'und',
        'unmöglich',
        'unmögliche',
        'unmöglichen',
        'unmöglicher',
        'uns',
        'unser',
        'unser',
        'unsere',
        'unsere',
        'unserem',
        'unseren',
        'unserer',
        'unseres',
        'unter',
        'usw',
        'viel',
        'viele',
        'vielen',
        'vieler',
        'vieles',
        'vielleicht',
        'vielmals',
        'vom',
        'von',
        'vor',
        'voran',
        'vorher',
        'vorüber',
        'völlig',
        'wann',
        'war',
        'waren',
        'warst',
        'warum',
        'was',
        'weder',
        'weil',
        'weiter',
        'weitere',
        'weiterem',
        'weiteren',
        'weiterer',
        'weiteres',
        'weiterhin',
        'weiß',
        'welche',
        'welchem',
        'welchen',
        'welcher',
        'welches',
        'wem',
        'wen',
        'wenig',
        'wenige',
        'weniger',
        'wenigstens',
        'wenn',
        'wenngleich',
        'wer',
        'werde',
        'werden',
        'werdet',
        'weshalb',
        'wessen',
        'wichtig',
        'wie',
        'wieder',
        'wieso',
        'wieviel',
        'wiewohl',
        'will',
        'willst',
        'wir',
        'wird',
        'wirklich',
        'wirst',
        'wo',
        'wodurch',
        'wogegen',
        'woher',
        'wohin',
        'wohingegen',
        'wohl',
        'wohlweislich',
        'womit',
        'woraufhin',
        'woraus',
        'worin',
        'wurde',
        'wurden',
        'während',
        'währenddessen',
        'wär',
        'wäre',
        'wären',
        'würde',
        'würden',
        'z.B.',
        'zB',
        'zahlreich',
        'zeitweise',
        'zu',
        'zudem',
        'zuerst',
        'zufolge',
        'zugleich',
        'zuletzt',
        'zum',
        'zumal',
        'zur',
        'zurück',
        'zusammen',
        'zuviel',
        'zwar',
        'zwischen',
        'ähnlich',
        'übel',
        'über',
        'überall',
        'überallhin',
        'überdies',
        'übermorgen',
        'übrig',
        'übrigens'
    ];
}