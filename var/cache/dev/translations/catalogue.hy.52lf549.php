<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hy', array (
  'validators' => 
  array (
    'This value should be false.' => 'Արժեքը պետք է լինի սխալ։',
    'This value should be true.' => 'Արժեքը պետք է լինի ճիշտ։',
    'This value should be of type {{ type }}.' => 'Արժեքը պետք է լինի {{ type }} տեսակի։',
    'This value should be blank.' => 'Արժեքը պետք է լինի դատարկ։',
    'The value you selected is not a valid choice.' => 'Ձեր ընտրած արժեքը անվավեր ընտրություն է։',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Դուք պետք է ընտրեք ամենաքիչը {{ limit }} տարբերակներ։',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Դուք պետք է ընտրեք ոչ ավելի քան {{ limit }} տարբերակներ։',
    'One or more of the given values is invalid.' => 'Մեկ կամ ավելի տրված արժեքները անվավեր են։',
    'This field was not expected.' => 'Այս դաշտը չի սպասվում։',
    'This field is missing.' => 'Այս դաշտը բացակայում է։',
    'This value is not a valid date.' => 'Արժեքը սխալ ամսաթիվ է։',
    'This value is not a valid datetime.' => 'Ամսաթվի և ժամանակի արժեքը անվավեր է։',
    'This value is not a valid email address.' => 'Անվավեր էլ֊փոստի արժեք։',
    'The file could not be found.' => 'Նիշքը չի գտնվել։',
    'The file is not readable.' => 'Նիշքը անընթեռնելի է։',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Նիշքը չափազանց մեծ է ({{ size }} {{ suffix }}): Մաքսիմալ թույլատրելի չափսը՝ {{ limit }} {{ suffix }}։',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-տեսակը անվավեր է է({{ type }}): Նիշքերի թույլատրելի MIME-տեսակներն են: {{ types }}։',
    'This value should be {{ limit }} or less.' => 'Արժեքը պետք է լինի {{ limit }} կամ փոքր։',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Արժեքը չափազանց երկար է: Պետք է լինի {{ limit }} կամ ավել սիմվոլներ։',
    'This value should be {{ limit }} or more.' => 'Արժեքը պետ է լինի {{ limit }} կամ շատ։',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Արժեքը չափազանց կարճ է: Պետք է լինի {{ limit }} կամ ավելի սիմվոլներ։',
    'This value should not be blank.' => 'Արժեքը չպետք է դատարկ լինի։',
    'This value should not be null.' => 'Արժեքը չպետք է լինի null։',
    'This value should be null.' => 'Արժեքը պետք է լինի null։',
    'This value is not valid.' => 'Անվավեր արժեք։',
    'This value is not a valid time.' => 'Ժամանակի արժեքը անվավեր է։',
    'This value is not a valid URL.' => 'Արժեքը  URL  չէ։',
    'The two values should be equal.' => 'Երկու արժեքները պետք է նույնը լինեն։',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Նիշքը չափազանց մեծ է: Մաքսիմալ թույլատրելի չափսը {{ limit }} {{ suffix }} է։',
    'The file is too large.' => 'Նիշքը չափազանց մեծ է։',
    'The file could not be uploaded.' => 'Նիշքը չի կարող բեռնվել։',
    'This value should be a valid number.' => 'Արժեքը պետք է լինի թիվ։',
    'This value is not a valid country.' => 'Արժեքը պետք է լինի երկիր։',
    'This file is not a valid image.' => 'Նիշքը նկարի վավեր ֆորմատ չէ։',
    'This is not a valid IP address.' => 'Արժեքը վավեր IP հասցե չէ։',
    'This value is not a valid language.' => 'Արժեքը վավեր լեզու չէ։',
    'This value is not a valid locale.' => 'Արժեքը չի հանդիսանում վավեր տեղայնացում։',
    'This value is already used.' => 'Այդ արժեքն արդեն օգտագործվում է։',
    'The size of the image could not be detected.' => 'Նկարի չափսերը չստացվեց որոշել։',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Նկարի լայնությունը չափազանց մեծ է({{ width }}px). Մաքսիմալ չափն է {{ max_width }}px։',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Նկարի լայնությունը չափազանց փոքր է ({{ width }}px). Մինիմալ չափն է {{ min_ width }}px։',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Նկարի բարձրությունը չափազանց մեծ է ({{ height }}px). Մաքսիմալ չափն է {{ max_height }}px։',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Նկարի բարձրությունը չափազանց փոքր է ({{ height }}px). Մինիմալ չափն է {{ min_height }}px։',
    'This value should be the user\'s current password.' => 'Այս արժեքը պետք է լինի օգտագործողի ներկա ծածկագիրը։',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Այս արժեքը պետք է ունենա ճիշտ {{ limit }} սիմվոլներ։',
    'The file was only partially uploaded.' => 'Նիշքի մասնակի բեռնման սխալ։',
    'No file was uploaded.' => 'Նիշքը չի բեռնվել։',
    'No temporary folder was configured in php.ini.' => 'php.ini նիշքում ժամանակավոր պանակ նշված չէ։',
    'Cannot write temporary file to disk.' => 'Ժամանակավոր նիշքը հնարավոր չէ գրել սկավառակի վրա։',
    'A PHP extension caused the upload to fail.' => 'PHP ֆորմատը դարձել է բեռնման չհաջողման պատճառ։',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Այս հավաքածուն պետք է պաուրակի {{ limit }} կամ ավելի տարրեր։|Այս հավելվածը պետք է պարունակի limit }} տարր կամ ավելին։|Այս հավաքածուն պետք է պարունակի {{ limit }} տարրերին կամ ավելի։',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Այս հավաքածուն պետք է պաուրակի {{ limit }} տարրեր կամ քիչ։|Այս հավաքածուն պետք է պաուրակի {{ limit }} տարր կամ քիչ։|Այս հավաքածուն պետք է պաուրակի {{ limit }} տարրեր կամ քիչ։',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Այս հավաքածուն պետք է պաուրակի ուղիղ {{ limit }} տարր։|Այս հավաքածուն պետք է պաուրակի ուղիղ {{ limit }} տարրեր։|Այս հավաքածուն պետք է պաուրակի {{ limit }} տարրեր։',
    'Invalid card number.' => 'Քարտի սխալ համար:',
    'Unsupported card type or invalid card number.' => 'Չսպասարկվող կամ սխալ քարտի համար:',
    'This is not a valid International Bank Account Number (IBAN).' => 'Արժեքը վավեր միջազային բանկային հաշվի համար չէ (IBAN)։',
    'This value is not a valid ISBN-10.' => 'Արժեքը ունի անվավեր ISBN-10 ձևաչափ։',
    'This value is not a valid ISBN-13.' => 'Արժեքը ունի անվավեր ISBN-13 ձևաչափ։',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Արժեքը չի համապատասխանում ISBN-10 և ISBN-13 ձևաչափերին։',
    'This value is not a valid ISSN.' => 'Արժեքը չի համապաստասխանում ISSN ձևաչափին։',
    'This value is not a valid currency.' => 'Արժեքը վավեր տարադրամ չէ։',
    'This value should be equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի {{ compared_value }}։',
    'This value should be greater than {{ compared_value }}.' => 'Արժեքը պետք է մեծ լինի, քան {{ compared_value }}։',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի հավասար կամ մեծ քան {{ compared_value }}։',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Արժեքը պետք է լինի ինչպես {{ compared_value_type }} {{ compared_value }}։',
    'This value should be less than {{ compared_value }}.' => 'Արժեքը պետք է լինի փոքր քան {{ compared_value }}։',
    'This value should be less than or equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի փոքր կամ հավասար {{ compared_value }}։',
    'This value should not be equal to {{ compared_value }}.' => 'Արժեքը պետք է լինի հավասար {{ compared_value }}։',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Արժեքը պետք է լինի նունը {{ compared_value_type }} {{ compared_value }}:',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Պատկերի կողմերի հարաբերակցությունը խիստ մեծ է ({{ ratio }}). Մաքսիմալ հարաբերակցությունը՝ {{ max_ratio }}։',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Պատկերի կողմերի հարաբերակցությունը խիստ փոքր է ({{ ratio }}). Մինիմալ հարաբերակցությունը՝ {{ min_ratio }}։',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Պատկերը քառակուսի է({{ width }}x{{ height }}px)։ Քառակուսի նկարներ չեն թույլատրվում։',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Պատկերը ալբոմային ուղղվածության է({{ width }}x{{ height }}px)․ դա չի թույլատրվում։',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Պատկերը պորտրետային ուղղվածության է ({{ width }}x{{ height }}px)․ դա չի թույլատրվում։',
    'An empty file is not allowed.' => 'Դատարկ նիշք չի թույլատրվում։',
    'The host could not be resolved.' => 'Հոսթի անունը հնարավոր չի պարզել:',
    'This value does not match the expected {{ charset }} charset.' => 'Արժեքը չի համընկնում {{ charset }} կոդավորման հետ:',
    'This is not a valid Business Identifier Code (BIC).' => 'Սա վավեր Business Identifier Code (BIC) չէ։',
    'This form should not contain extra fields.' => 'Այս ձևը չպետք է պարունակի լրացուցիչ տողեր.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Վերբեռնված ֆայլը չափազանց մեծ է: Խնդրվում է վերբեռնել ավելի փոքր չափսի ֆայլ.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF արժեքը անթույլատրելի է: Փորձեք նորից ուղարկել ձևը.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'sonata.block.menu.not_existing' => 'Menu %name% does not exist.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'SonataDatagridBundle' => 
  array (
    'link_next_pager' => 'Next',
    'link_previous_pager' => 'Previous',
    'link_first_pager' => 'First',
    'link_last_pager' => 'Last',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Add new',
    'label_type_yes' => 'yes',
    'label_type_no' => 'no',
    'sonata_core_template_box_file_found_in' => 'This file can be found in',
    'label_type_equals' => 'is equal to',
    'label_type_not_equals' => 'is not equal to',
    'date_range_start' => 'From',
    'date_range_end' => 'To',
    'aliceblue' => 'AliceBlue',
    'antiquewhite' => 'AntiqueWhite',
    'aqua' => 'Aqua',
    'aquamarine' => 'Aquamarine',
    'azure' => 'Azure',
    'beige' => 'Beige',
    'bisque' => 'Bisque',
    'black' => 'Black',
    'blanchedalmond' => 'BlanchedAlmond',
    'blue' => 'Blue',
    'blueviolet' => 'BlueViolet',
    'brown' => 'Brown',
    'burlywood' => 'BurlyWood',
    'cadetblue' => 'CadetBlue',
    'chartreuse' => 'Chartreuse',
    'chocolate' => 'Chocolate',
    'coral' => 'Coral',
    'cornflowerblue' => 'CornflowerBlue',
    'cornsilk' => 'Cornsilk',
    'crimson' => 'Crimson',
    'cyan' => 'Cyan',
    'darkblue' => 'DarkBlue',
    'darkcyan' => 'DarkCyan',
    'darkgoldenrod' => 'DarkGoldenRod',
    'darkgray' => 'DarkGray',
    'darkgreen' => 'DarkGreen',
    'darkkhaki' => 'DarkKhaki',
    'darkmagenta' => 'DarkMagenta',
    'darkolivegreen' => 'DarkOliveGreen',
    'darkorange' => 'DarkOrange',
    'darkorchid' => 'DarkOrchid',
    'darkred' => 'DarkRed',
    'darksalmon' => 'DarkSalmon',
    'darkseagreen' => 'DarkSeaGreen',
    'darkslateblue' => 'DarkSlateBlue',
    'darkslategray' => 'DarkSlateGray',
    'darkturquoise' => 'DarkTurquoise',
    'darkviolet' => 'DarkViolet',
    'deeppink' => 'DeepPink',
    'deepskyblue' => 'DeepSkyBlue',
    'dimgray' => 'DimGray',
    'dodgerblue' => 'DodgerBlue',
    'firebrick' => 'FireBrick',
    'floralwhite' => 'FloralWhite',
    'forestgreen' => 'ForestGreen',
    'fuchsia' => 'Fuchsia',
    'gainsboro' => 'Gainsboro',
    'ghostwhite' => 'GhostWhite',
    'gold' => 'Gold',
    'goldenrod' => 'GoldenRod',
    'gray' => 'Gray',
    'green' => 'Green',
    'greenyellow' => 'GreenYellow',
    'honeydew' => 'HoneyDew',
    'hotpink' => 'HotPink',
    'indianred' => 'IndianRed',
    'indigo' => 'Indigo',
    'ivory' => 'Ivory',
    'khaki' => 'Khaki',
    'lavender' => 'Lavender',
    'lavenderblush' => 'LavenderBlush',
    'lawngreen' => 'LawnGreen',
    'lemonchiffon' => 'LemonChiffon',
    'lightblue' => 'LightBlue',
    'lightcoral' => 'LightCoral',
    'lightcyan' => 'LightCyan',
    'lightgoldenrodyellow' => 'LightGoldenRodYellow',
    'lightgray' => 'LightGray',
    'lightgreen' => 'LightGreen',
    'lightpink' => 'LightPink',
    'lightsalmon' => 'LightSalmon',
    'lightseagreen' => 'LightSeaGreen',
    'lightskyblue' => 'LightSkyBlue',
    'lightslategray' => 'LightSlateGray',
    'lightsteelblue' => 'LightSteelBlue',
    'lightyellow' => 'LightYellow',
    'lime' => 'Lime',
    'limegreen' => 'LimeGreen',
    'linen' => 'Linen',
    'magenta' => 'Magenta',
    'maroon' => 'Maroon',
    'mediumaquamarine' => 'MediumAquaMarine',
    'mediumblue' => 'MediumBlue',
    'mediumorchid' => 'MediumOrchid',
    'mediumpurple' => 'MediumPurple',
    'mediumseagreen' => 'MediumSeaGreen',
    'mediumslateblue' => 'MediumSlateBlue',
    'mediumspringgreen' => 'MediumSpringGreen',
    'mediumturquoise' => 'MediumTurquoise',
    'mediumvioletred' => 'MediumVioletRed',
    'midnightblue' => 'MidnightBlue',
    'mintcream' => 'MintCream',
    'mistyrose' => 'MistyRose',
    'moccasin' => 'Moccasin',
    'navajowhite' => 'NavajoWhite',
    'navy' => 'Navy',
    'oldlace' => 'OldLace',
    'olive' => 'Olive',
    'olivedrab' => 'OliveDrab',
    'orange' => 'Orange',
    'orangered' => 'OrangeRed',
    'orchid' => 'Orchid',
    'palegoldenrod' => 'PaleGoldenRod',
    'palegreen' => 'PaleGreen',
    'paleturquoise' => 'PaleTurquoise',
    'palevioletred' => 'PaleVioletRed',
    'papayawhip' => 'PapayaWhip',
    'peachpuff' => 'PeachPuff',
    'peru' => 'Peru',
    'pink' => 'Pink',
    'plum' => 'Plum',
    'powderblue' => 'PowderBlue',
    'purple' => 'Purple',
    'rebeccapurple' => 'RebeccaPurple',
    'red' => 'Red',
    'rosybrown' => 'RosyBrown',
    'royalblue' => 'RoyalBlue',
    'saddlebrown' => 'SaddleBrown',
    'salmon' => 'Salmon',
    'sandybrown' => 'SandyBrown',
    'seagreen' => 'SeaGreen',
    'seashell' => 'SeaShell',
    'sienna' => 'Sienna',
    'silver' => 'Silver',
    'skyblue' => 'SkyBlue',
    'slateblue' => 'SlateBlue',
    'slategray' => 'SlateGray',
    'snow' => 'Snow',
    'springgreen' => 'SpringGreen',
    'steelblue' => 'SteelBlue',
    'tan' => 'Tan',
    'teal' => 'Teal',
    'thistle' => 'Thistle',
    'tomato' => 'Tomato',
    'turquoise' => 'Turquoise',
    'violet' => 'Violet',
    'wheat' => 'Wheat',
    'white' => 'White',
    'whitesmoke' => 'WhiteSmoke',
    'yellow' => 'Yellow',
    'yellowgreen' => 'YellowGreen',
    'message_close' => 'Close',
  ),
  'SonataBlockBundle' => 
  array (
    'sonata.block.container' => 'Container',
    'sonata.block.text' => 'Simple text',
    'sonata.block.rss' => 'RSS feed',
    'sonata.block.menu' => 'Menu',
    'sonata.block.template' => 'Template',
    'form.label_template' => 'Template',
    'form.label_content' => 'Content',
    'form.label_url' => 'URL',
    'form.label_title' => 'Title',
    'form.label_code' => 'Code',
    'form.label_layout' => 'Layout',
    'form.label_class' => 'CSS Class',
    'form.label_cache_policy' => 'Cache policy',
    'form.label_safe_labels' => 'Safe labels',
    'form.label_current_class' => 'Current CSS Class',
    'form.label_first_class' => 'First CSS Class',
    'form.label_last_class' => 'Last CSS Class',
    'form.label_menu_class' => 'Menu CSS Class',
    'form.label_children_class' => 'Children CSS Class',
    'form.label_menu_template' => 'Menu Template',
    'form.label_translation_domain' => 'Translation domain',
    'form.label_icon' => 'Icon',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administration',
    'action_delete' => 'Delete',
    'btn_batch' => 'OK',
    'btn_create' => 'Create',
    'btn_create_and_edit_again' => 'Create',
    'btn_create_and_create_a_new_one' => 'Create and add another',
    'btn_create_and_return_to_list' => 'Create and return to list',
    'btn_filter' => 'Filter',
    'btn_advanced_filters' => 'Advanced filters',
    'btn_update' => 'Update',
    'btn_update_and_edit_again' => 'Update',
    'btn_update_and_return_to_list' => 'Update and close',
    'link_delete' => 'Delete',
    'link_action_create' => 'Add new',
    'link_action_list' => 'Return to list',
    'link_action_show' => 'Show',
    'link_action_edit' => 'Edit',
    'link_add' => 'Add new',
    'link_edit' => 'Edit',
    'link_list' => 'List',
    'link_reset_filter' => 'Reset',
    'title_create' => 'Create',
    'title_show' => 'Show "%name%"',
    'title_dashboard' => 'Dashboard',
    'title_edit' => 'Edit "%name%"',
    'title_list' => 'List',
    'link_next_pager' => 'Next',
    'link_previous_pager' => 'Previous',
    'link_first_pager' => 'First',
    'link_last_pager' => 'Last',
    'Admin' => 'Admin',
    'link_expand' => 'expand/collapse',
    'no_result' => 'No result',
    'confirm_msg' => 'Are you sure ?',
    'action_edit' => 'Edit',
    'action_show' => 'Show',
    'all_elements' => 'All elements',
    'flash_batch_empty' => 'Action aborted. No items were selected.',
    'flash_create_success' => 'Item "%name%" has been successfully created.',
    'flash_create_error' => 'An error has occurred during the creation of item "%name%".',
    'flash_edit_success' => 'Item "%name%" has been successfully updated.',
    'flash_edit_error' => 'An error has occurred during update of item "%name%".',
    'flash_lock_error' => 'Another user has modified item "%name%". Please %link_start%click here%link_end% to reload the page and apply the changes again.',
    'flash_batch_delete_success' => 'Selected items have been successfully deleted.',
    'flash_batch_no_elements_processed' => 'No elements processed.',
    'flash_batch_delete_error' => 'An Error has occurred during selected items deletion.',
    'flash_delete_error' => 'An Error has occurred during deletion of item "%name%".',
    'flash_delete_success' => 'Item "%name%" has been deleted successfully.',
    'form_not_available' => 'Form is not available.',
    'link_breadcrumb_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Confirm deletion',
    'message_delete_confirmation' => 'Are you sure you want to delete the selected "%object%" element?',
    'btn_delete' => 'Yes, delete',
    'title_batch_confirmation' => 'Confirm batch action "%action%"',
    'message_batch_confirmation' => 'Are you sure you want to confirm this action and execute it for the selected element?|Are you sure you want to confirm this action and execute it for the %count% selected elements?',
    'message_batch_all_confirmation' => 'Are you sure you want to confirm this action and execute it for all the elements?',
    'btn_execute_batch_action' => 'Yes, execute',
    'label_type_yes' => 'yes',
    'label_type_no' => 'no',
    'label_type_contains' => 'contains',
    'label_type_not_contains' => 'does not contain',
    'label_type_equals' => 'is equal to',
    'label_type_not_equals' => 'is not equal to',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'is empty',
    'label_date_type_not_null' => 'is not empty',
    'label_date_type_between' => 'between',
    'label_date_type_not_between' => 'not between',
    'label_filters' => 'Filters',
    'delete_or' => 'or',
    'link_action_history' => 'Revisions',
    'td_action' => 'Action',
    'td_compare' => 'Compare',
    'td_revision' => 'Revisions',
    'td_timestamp' => 'Date',
    'td_username' => 'Author',
    'td_role' => 'Role',
    'label_view_revision' => 'View Revision',
    'label_compare_revision' => 'Compare revision',
    'list_results_count_prefix' => 'at least',
    'list_results_count' => '1 result|%count% results',
    'label_export_download' => 'Download',
    'export_format_json' => 'JSON',
    'export_format_xml' => 'XML',
    'export_format_csv' => 'CSV',
    'export_format_xls' => 'XLS',
    'loading_information' => 'Loading information…',
    'btn_preview' => 'Preview',
    'btn_preview_approve' => 'Approve',
    'btn_preview_decline' => 'Decline',
    'label_per_page' => 'Per page',
    'list_select' => 'Select',
    'confirm_exit' => 'You have unsaved changes.',
    'link_edit_acl' => 'Edit ACL',
    'btn_update_acl' => 'Update ACL',
    'flash_acl_edit_success' => 'ACL has been successfuly updated.',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'No selection',
    'title_search_results' => 'Search results: %query%',
    'search_placeholder' => 'Search',
    'no_results_found' => 'no result found',
    'add_new_entry' => 'add new entry',
    'link_actions' => 'Actions',
    'noscript_warning' => 'Javascript is disabled in your web browser. Some features will not work properly.',
    'message_form_group_empty' => 'No fields available.',
    'link_filters' => 'Filters',
    'stats_view_more' => 'View more',
    'title_select_subclass' => 'Select object type',
    'no_subclass_available' => 'No object types available',
    'label_unknown_user' => 'unknown',
    'read_more' => 'Read more',
    'read_less' => 'Close',
    'toggle_navigation' => 'Toggle Navigation',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
