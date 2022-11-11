<x-app-layout>

    {{-- 国検索ここから --}}
    <form class="form-inline my-2 my-lg-0 ml-2">
        <div class="form-group">
            {{-- class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-half py-2 px-3"         --}}
            {{-- <input type="search" class="form-control mr-sm-2" name="country" value="{{ request('country') }}"
                        placeholder="国選択" aria-label="検索..."> --}}
            <select name="country" class="country">
                <option value="">select a country</option>
                <option value="Aland Islands" {{ Request::get('country') == 'Aland Islands' ? 'selected' : '' }}>Aland
                    Islands</option>
                <option value="Albania" {{ Request::get('country') == 'Albania' ? 'selected' : '' }}>Albania</option>
                <option value="Algeria" {{ Request::get('country') == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                <option value="American Samoa" {{ Request::get('country') == 'American Samoa' ? 'selected' : '' }}>
                    American Samoa</option>
                <option value="Andorra" {{ Request::get('country') == 'Andorra' ? 'selected' : '' }}>Andorra</option>
                <option value="Angola" {{ Request::get('country') == 'Angola' ? 'selected' : '' }}>Angola</option>
                <option value="Anguilla" {{ Request::get('country') == 'Anguilla' ? 'selected' : '' }}>Anguilla</option>
                <option value="Antigua" {{ Request::get('country') == 'Antigua' ? 'selected' : '' }}>Antigua</option>
                <option value="Argentina" {{ Request::get('country') == 'Argentina' ? 'selected' : '' }}>Argentina
                </option>
                <option value="Armenia" {{ Request::get('country') == 'Armenia' ? 'selected' : '' }}>Armenia</option>
                <option value="Aruba" {{ Request::get('country') == 'Aruba' ? 'selected' : '' }}>Aruba</option>
                <option value="Australia" {{ Request::get('country') == 'Australia' ? 'selected' : '' }}>Australia
                </option>
                <option value="Austria" {{ Request::get('country') == 'Austria' ? 'selected' : '' }}>Austria</option>
                <option value="Azerbaijan" {{ Request::get('country') == 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan
                </option>
                <option value="Bahamas" {{ Request::get('country') == 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
                <option value="Bahrain" {{ Request::get('country') == 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                <option value="Bangladesh" {{ Request::get('country') == 'Bangladesh' ? 'selected' : '' }}>Bangladesh
                </option>
                <option value="Barbados" {{ Request::get('country') == 'Barbados' ? 'selected' : '' }}>Barbados
                </option>
                <option value="Belarus" {{ Request::get('country') == 'Belarus' ? 'selected' : '' }}>Belarus</option>
                <option value="Belgium" {{ Request::get('country') == 'Belgium' ? 'selected' : '' }}>Belgium</option>
                <option value="Belize" {{ Request::get('country') == 'Belize' ? 'selected' : '' }}>Belize</option>
                <option value="Benin" {{ Request::get('country') == 'Benin' ? 'selected' : '' }}>Benin</option>
                <option value="Bermuda" {{ Request::get('country') == 'Bermuda' ? 'selected' : '' }}>Bermuda</option>
                <option value="Bhutan" {{ Request::get('country') == 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
                <option value="Bolivia" {{ Request::get('country') == 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                <option value="Bosnia" {{ Request::get('country') == 'Bosnia' ? 'selected' : '' }}>Bosnia</option>
                <option value="Botswana" {{ Request::get('country') == 'Botswana' ? 'selected' : '' }}>Botswana
                </option>
                <option value="Bouvet Island" {{ Request::get('country') == 'Bouvet Island' ? 'selected' : '' }}>Bouvet
                    Island</option>
                <option value="Brazil" {{ Request::get('country') == 'Brazil' ? 'selected' : '' }}>Brazil</option>
                <option value="British Virgin Islands"
                    {{ Request::get('country') == 'British Virgin Islands' ? 'selected' : '' }}>British Virgin Islands
                </option>
                <option value="Brunei" {{ Request::get('country') == 'Brunei' ? 'selected' : '' }}>Brunei</option>
                <option value="Bulgaria" {{ Request::get('country') == 'Bulgaria' ? 'selected' : '' }}>Bulgaria
                </option>
                <option value="Burkina Faso" {{ Request::get('country') == 'Burkina Faso' ? 'selected' : '' }}>Burkina
                    Faso</option>
                <option value="Burma" {{ Request::get('country') == 'Burma' ? 'selected' : '' }}>Burma</option>
                <option value="Burundi" {{ Request::get('country') == 'Burundi' ? 'selected' : '' }}>Burundi</option>
                <option value="Caicos Islands" {{ Request::get('country') == 'Caicos Islands' ? 'selected' : '' }}>
                    Caicos Islands</option>
                <option value="Cambodia" {{ Request::get('country') == 'Cambodia' ? 'selected' : '' }}>Cambodia
                </option>
                <option value="Cameroon" {{ Request::get('country') == 'Cameroon' ? 'selected' : '' }}>Cameroon
                </option>
                <option value="Canada" {{ Request::get('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
                <option value="Cape Verde" {{ Request::get('country') == 'Cape Verde' ? 'selected' : '' }}>Cape Verde
                </option>
                <option value="Cayman Islands" {{ Request::get('country') == 'Cayman Islands' ? 'selected' : '' }}>
                    Cayman Islands</option>
                <option value="Central African Republic"
                    {{ Request::get('country') == 'Central African Republic' ? 'selected' : '' }}>Central African
                    Republic</option>
                <option value="Chad" {{ Request::get('country') == 'Chad' ? 'selected' : '' }}>Chad</option>
                <option value="Chile" {{ Request::get('country') == 'Chile' ? 'selected' : '' }}>Chile</option>
                <option value="China" {{ Request::get('country') == 'China' ? 'selected' : '' }}>China</option>
                <option value="Christmas Island" {{ Request::get('country') == 'Christmas Island' ? 'selected' : '' }}>
                    Christmas Island</option>
                <option value="Cocos Islands" {{ Request::get('country') == 'Cocos Islands' ? 'selected' : '' }}>Cocos
                    Islands</option>
                <option value="Colombia" {{ Request::get('country') == 'Colombia' ? 'selected' : '' }}>Colombia
                </option>
                <option value="Comoros" {{ Request::get('country') == 'Comoros' ? 'selected' : '' }}>Comoros</option>
                <option value="Congo Brazzaville"
                    {{ Request::get('country') == 'Congo Brazzaville' ? 'selected' : '' }}>Congo Brazzaville</option>
                <option value="Congo" {{ Request::get('country') == 'Congo' ? 'selected' : '' }}>Congo</option>
                <option value="Cook Islands" {{ Request::get('country') == 'Cook Islands' ? 'selected' : '' }}>Cook
                    Islands</option>
                <option value="Costa Rica" {{ Request::get('country') == 'Costa Rica' ? 'selected' : '' }}>Costa Rica
                </option>
                <option value="Cote Divoire" {{ Request::get('country') == 'Cote Divoire' ? 'selected' : '' }}>Cote
                    Divoire</option>
                <option value="Croatia" {{ Request::get('country') == 'Croatia' ? 'selected' : '' }}>Croatia</option>
                <option value="Cuba" {{ Request::get('country') == 'Cuba' ? 'selected' : '' }}>Cuba</option>
                <option value="Cyprus" {{ Request::get('country') == 'Cyprus' ? 'selected' : '' }}>Cyprus</option>
                <option value="Czech Republic" {{ Request::get('country') == 'Czech Republic' ? 'selected' : '' }}>
                    Czech Republic</option>
                <option value="Denmark" {{ Request::get('country') == 'Denmark' ? 'selected' : '' }}>Denmark</option>
                <option value="Djibouti" {{ Request::get('country') == 'Djibouti' ? 'selected' : '' }}>Djibouti
                </option>
                <option value="Dominica" {{ Request::get('country') == 'Dominica' ? 'selected' : '' }}>Dominica
                </option>
                <option value="Dominican Republic"
                    {{ Request::get('country') == 'Dominican Republic' ? 'selected' : '' }}>Dominican Republic</option>
                <option value="Ecuador" {{ Request::get('country') == 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                <option value="Egypt" {{ Request::get('country') == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                <option value="El Salvador" {{ Request::get('country') == 'El Salvador' ? 'selected' : '' }}>El
                    Salvador</option>
                <option value="England" {{ Request::get('country') == 'England' ? 'selected' : '' }}>England</option>
                <option value="Equatorial Guinea"
                    {{ Request::get('country') == 'Equatorial Guinea' ? 'selected' : '' }}>Equatorial Guinea</option>
                <option value="Eritrea" {{ Request::get('country') == 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
                <option value="Estonia" {{ Request::get('country') == 'Estonia' ? 'selected' : '' }}>Estonia</option>
                <option value="Ethiopia" {{ Request::get('country') == 'Ethiopia' ? 'selected' : '' }}>Ethiopia
                </option>
                <option value="European Union" {{ Request::get('country') == 'European Union' ? 'selected' : '' }}>
                    European Union</option>
                <option value="Falkland Islands" {{ Request::get('country') == 'Falkland Islands' ? 'selected' : '' }}>
                    Falkland Islands</option>
                <option value="Faroe Islands" {{ Request::get('country') == 'Faroe Islands' ? 'selected' : '' }}>Faroe
                    Islands</option>
                <option value="Fiji" {{ Request::get('country') == 'Fiji' ? 'selected' : '' }}>Fiji</option>
                <option value="Finland" {{ Request::get('country') == 'Finland' ? 'selected' : '' }}>Finland</option>
                <option value="France" {{ Request::get('country') == 'France' ? 'selected' : '' }}>France</option>
                <option value="French Guiana" {{ Request::get('country') == 'French Guiana' ? 'selected' : '' }}>French
                    Guiana</option>
                <option value="French Polynesia" {{ Request::get('country') == 'French Polynesia' ? 'selected' : '' }}>
                    French Polynesia</option>
                <option value="French Territories"
                    {{ Request::get('country') == 'French Territories' ? 'selected' : '' }}>French Territories</option>
                <option value="Gabon" {{ Request::get('country') == 'Gabon' ? 'selected' : '' }}>Gabon</option>
                <option value="Gambia" {{ Request::get('country') == 'Gambia' ? 'selected' : '' }}>Gambia</option>
                <option value="Georgia" {{ Request::get('country') == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                <option value="Germany" {{ Request::get('country') == 'Germany' ? 'selected' : '' }}>Germany</option>
                <option value="Ghana" {{ Request::get('country') == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                <option value="Gibraltar" {{ Request::get('country') == 'Gibraltar' ? 'selected' : '' }}>Gibraltar
                </option>
                <option value="Greece" {{ Request::get('country') == 'Greece' ? 'selected' : '' }}>Greece</option>
                <option value="Greenland" {{ Request::get('country') == 'Greenland' ? 'selected' : '' }}>Greenland
                </option>
                <option value="Grenada" {{ Request::get('country') == 'Grenada' ? 'selected' : '' }}>Grenada</option>
                <option value="Guadeloupe" {{ Request::get('country') == 'Guadeloupe' ? 'selected' : '' }}>Guadeloupe
                </option>
                <option value="Guam" {{ Request::get('country') == 'Guam' ? 'selected' : '' }}>Guam</option>
                <option value="Guatemala" {{ Request::get('country') == 'Guatemala' ? 'selected' : '' }}>Guatemala
                </option>
                <option value="Guinea-Bissau" {{ Request::get('country') == 'Guinea-Bissau' ? 'selected' : '' }}>
                    Guinea-Bissau</option>
                <option value="Guinea" {{ Request::get('country') == 'Guinea' ? 'selected' : '' }}>Guinea</option>
                <option value="Guyana" {{ Request::get('country') == 'Guyana' ? 'selected' : '' }}>Guyana</option>
                <option value="Haiti" {{ Request::get('country') == 'Haiti' ? 'selected' : '' }}>Haiti</option>
                <option value="Heard Island" {{ Request::get('country') == 'Heard Island' ? 'selected' : '' }}>Heard
                    Island</option>
                <option value="Honduras" {{ Request::get('country') == 'Honduras' ? 'selected' : '' }}>Honduras
                </option>
                <option value="Hong Kong" {{ Request::get('country') == 'Hong Kong' ? 'selected' : '' }}>Hong Kong
                </option>
                <option value="Hungary" {{ Request::get('country') == 'Hungary' ? 'selected' : '' }}>Hungary</option>
                <option value="Iceland" {{ Request::get('country') == 'Iceland' ? 'selected' : '' }}>Iceland</option>
                <option value="India" {{ Request::get('country') == 'India' ? 'selected' : '' }}>India</option>
                <option value="Indian Ocean Territory"
                    {{ Request::get('country') == 'Indian Ocean Territory' ? 'selected' : '' }}>Indian Ocean Territory
                </option>
                <option value="Indonesia" {{ Request::get('country') == 'Indonesia' ? 'selected' : '' }}>Indonesia
                </option>
                <option value="Iran" {{ Request::get('country') == 'Iran' ? 'selected' : '' }}>Iran</option>
                <option value="Iraq" {{ Request::get('country') == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                <option value="Ireland" {{ Request::get('country') == 'Ireland' ? 'selected' : '' }}>Ireland</option>
                <option value="Israel" {{ Request::get('country') == 'Israel' ? 'selected' : '' }}>Israel</option>
                <option value="Italy" {{ Request::get('country') == 'Italy' ? 'selected' : '' }}>Italy</option>
                <option value="Jamaica" {{ Request::get('country') == 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
                <option value="Japan" {{ Request::get('country') == 'Japan' ? 'selected' : '' }}>Japan</option>
                <option value="Jordan" {{ Request::get('country') == 'Jordan' ? 'selected' : '' }}>Jordan</option>
                <option value="Kazakhstan" {{ Request::get('country') == 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan
                </option>
                <option value="Kenya" {{ Request::get('country') == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                <option value="Kiribati" {{ Request::get('country') == 'Kiribati' ? 'selected' : '' }}>Kiribati
                </option>
                <option value="Kuwait" {{ Request::get('country') == 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
                <option value="Kyrgyzstan" {{ Request::get('country') == 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan
                </option>
                <option value="Laos" {{ Request::get('country') == 'Laos' ? 'selected' : '' }}>Laos</option>
                <option value="Latvia" {{ Request::get('country') == 'Latvia' ? 'selected' : '' }}>Latvia</option>
                <option value="Lebanon" {{ Request::get('country') == 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
                <option value="Lesotho" {{ Request::get('country') == 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
                <option value="Liberia" {{ Request::get('country') == 'Liberia' ? 'selected' : '' }}>Liberia</option>
                <option value="Libya" {{ Request::get('country') == 'Libya' ? 'selected' : '' }}>Libya</option>
                <option value="Liechtenstein" {{ Request::get('country') == 'Liechtenstein' ? 'selected' : '' }}>
                    Liechtenstein</option>
                <option value="Lithuania" {{ Request::get('country') == 'Lithuania' ? 'selected' : '' }}>Lithuania
                </option>
                <option value="Luxembourg" {{ Request::get('country') == 'Luxembourg' ? 'selected' : '' }}>Luxembourg
                </option>
                <option value="Macau" {{ Request::get('country') == 'Macau' ? 'selected' : '' }}>Macau</option>
                <option value="Macedonia" {{ Request::get('country') == 'Macedonia' ? 'selected' : '' }}>Macedonia
                </option>
                <option value="Madagascar" {{ Request::get('country') == 'Madagascar' ? 'selected' : '' }}>Madagascar
                </option>
                <option value="Malawi" {{ Request::get('country') == 'Malawi' ? 'selected' : '' }}>Malawi</option>
                <option value="Malaysia" {{ Request::get('country') == 'Malaysia' ? 'selected' : '' }}>Malaysia
                </option>
                <option value="Maldives" {{ Request::get('country') == 'Maldives' ? 'selected' : '' }}>Maldives
                </option>
                <option value="Mali" {{ Request::get('country') == 'Mali' ? 'selected' : '' }}>Mali</option>
                <option value="Malta" {{ Request::get('country') == 'Malta' ? 'selected' : '' }}>Malta</option>
                <option value="Marshall Islands"
                    {{ Request::get('country') == 'Marshall Islands' ? 'selected' : '' }}>Marshall Islands</option>
                <option value="Martinique" {{ Request::get('country') == 'Martinique' ? 'selected' : '' }}>Martinique
                </option>
                <option value="Mauritania" {{ Request::get('country') == 'Mauritania' ? 'selected' : '' }}>Mauritania
                </option>
                <option value="Mauritius" {{ Request::get('country') == 'Mauritius' ? 'selected' : '' }}>Mauritius
                </option>
                <option value="Mayotte" {{ Request::get('country') == 'Mayotte' ? 'selected' : '' }}>Mayotte</option>
                <option value="Mexico" {{ Request::get('country') == 'Mexico' ? 'selected' : '' }}>Mexico</option>
                <option value="Micronesia" {{ Request::get('country') == 'Micronesia' ? 'selected' : '' }}>Micronesia
                </option>
                <option value="Moldova" {{ Request::get('country') == 'Moldova' ? 'selected' : '' }}>Moldova</option>
                <option value="Monaco" {{ Request::get('country') == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                <option value="Mongolia" {{ Request::get('country') == 'Mongolia' ? 'selected' : '' }}>Mongolia
                </option>
                <option value="Montenegro" {{ Request::get('country') == 'Montenegro' ? 'selected' : '' }}>Montenegro
                </option>
                <option value="Montserrat" {{ Request::get('country') == 'Montserrat' ? 'selected' : '' }}>Montserrat
                </option>
                <option value="Morocco" {{ Request::get('country') == 'Morocco' ? 'selected' : '' }}>Morocco</option>
                <option value="Mozambique" {{ Request::get('country') == 'Mozambique' ? 'selected' : '' }}>Mozambique
                </option>
                <option value="Namibia" {{ Request::get('country') == 'Namibia' ? 'selected' : '' }}>Namibia</option>
                <option value="Nauru" {{ Request::get('country') == 'Nauru' ? 'selected' : '' }}>Nauru</option>
                <option value="Nepal" {{ Request::get('country') == 'Nepal' ? 'selected' : '' }}>Nepal</option>
                <option value="Netherlands Antilles"
                    {{ Request::get('country') == 'Netherlands Antilles' ? 'selected' : '' }}>Netherlands Antilles
                </option>
                <option value="Netherlands" {{ Request::get('country') == 'Netherlands' ? 'selected' : '' }}>
                    Netherlands</option>
                <option value="New Caledonia" {{ Request::get('country') == 'New Caledonia' ? 'selected' : '' }}>New
                    Caledonia</option>
                <option value="New Guinea" {{ Request::get('country') == 'New Guinea' ? 'selected' : '' }}>New Guinea
                </option>
                <option value="New Zealand" {{ Request::get('country') == 'New Zealand' ? 'selected' : '' }}>New
                    Zealand</option>
                <option value="Nicaragua" {{ Request::get('country') == 'Nicaragua' ? 'selected' : '' }}>Nicaragua
                </option>
                <option value="Niger" {{ Request::get('country') == 'Niger' ? 'selected' : '' }}>Niger</option>
                <option value="Nigeria" {{ Request::get('country') == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                <option value="Niue" {{ Request::get('country') == 'Niue' ? 'selected' : '' }}>Niue</option>
                <option value="Norfolk Island" {{ Request::get('country') == 'Norfolk Island' ? 'selected' : '' }}>
                    Norfolk Island</option>
                <option value="North Korea" {{ Request::get('country') == 'North Korea' ? 'selected' : '' }}>North
                    Korea</option>
                <option value="Northern Mariana Islands"
                    {{ Request::get('country') == 'Northern Mariana Islands' ? 'selected' : '' }}>Northern Mariana
                    Islands</option>
                <option value="Norway" {{ Request::get('country') == 'Norway' ? 'selected' : '' }}>Norway</option>
                <option value="Oman" {{ Request::get('country') == 'Oman' ? 'selected' : '' }}>Oman</option>
                <option value="Pakistan" {{ Request::get('country') == 'Pakistan' ? 'selected' : '' }}>Pakistan
                </option>
                <option value="Palau" {{ Request::get('country') == 'Palau' ? 'selected' : '' }}>Palau</option>
                <option value="Palestine" {{ Request::get('country') == 'Palestine' ? 'selected' : '' }}>Palestine
                </option>
                <option value="Panama" {{ Request::get('country') == 'Panama' ? 'selected' : '' }}>Panama</option>
                <option value="Paraguay" {{ Request::get('country') == 'Paraguay' ? 'selected' : '' }}>Paraguay
                </option>
                <option value="Peru" {{ Request::get('country') == 'Peru' ? 'selected' : '' }}>Peru</option>
                <option value="Philippines" {{ Request::get('country') == 'Philippines' ? 'selected' : '' }}>
                    Philippines</option>
                <option value="Pitcairn Islands"
                    {{ Request::get('country') == 'Pitcairn Islands' ? 'selected' : '' }}>Pitcairn Islands</option>
                <option value="Poland" {{ Request::get('country') == 'Poland' ? 'selected' : '' }}>Poland</option>
                <option value="Portugal" {{ Request::get('country') == 'Portugal' ? 'selected' : '' }}>Portugal
                </option>
                <option value="Puerto Rico" {{ Request::get('country') == 'Puerto Rico' ? 'selected' : '' }}>Puerto
                    Rico</option>
                <option value="Qatar" {{ Request::get('country') == 'Qatar' ? 'selected' : '' }}>Qatar</option>
                <option value="Reunion" {{ Request::get('country') == 'Reunion' ? 'selected' : '' }}>Reunion</option>
                <option value="Romania" {{ Request::get('country') == 'Romania' ? 'selected' : '' }}>Romania</option>
                <option value="Russia" {{ Request::get('country') == 'Russia' ? 'selected' : '' }}>Russia</option>
                <option value="Rwanda" {{ Request::get('country') == 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
                <option value="Saint Helena" {{ Request::get('country') == 'Saint Helena' ? 'selected' : '' }}>Saint
                    Helena</option>
                <option value="Saint Kitts and Nevis"
                    {{ Request::get('country') == 'Saint Kitts and Nevis' ? 'selected' : '' }}>Saint Kitts and Nevis
                </option>
                <option value="Saint Lucia" {{ Request::get('country') == 'Saint Lucia' ? 'selected' : '' }}>Saint
                    Lucia</option>
                <option value="Saint Pierre" {{ Request::get('country') == 'Saint Pierre' ? 'selected' : '' }}>Saint
                    Pierre</option>
                <option value="Saint Vincent" {{ Request::get('country') == 'Saint Vincent' ? 'selected' : '' }}>
                    Saint Vincent</option>
                <option value="Samoa" {{ Request::get('country') == 'Samoa' ? 'selected' : '' }}>Samoa</option>
                <option value="San Marino" {{ Request::get('country') == 'San Marino' ? 'selected' : '' }}>San Marino
                </option>
                <option value="Sandwich Islands"
                    {{ Request::get('country') == 'Sandwich Islands' ? 'selected' : '' }}>Sandwich Islands</option>
                <option value="Sao Tome" {{ Request::get('country') == 'Sao Tome' ? 'selected' : '' }}>Sao Tome
                </option>
                <option value="Saudi Arabia" {{ Request::get('country') == 'Saudi Arabia' ? 'selected' : '' }}>Saudi
                    Arabia</option>
                <option value="Senegal" {{ Request::get('country') == 'Senegal' ? 'selected' : '' }}>Senegal</option>
                <option value="Serbia" {{ Request::get('country') == 'Serbia' ? 'selected' : '' }}>Serbia</option>
                <option value="Serbia" {{ Request::get('country') == 'Serbia' ? 'selected' : '' }}>Serbia</option>
                <option value="Seychelles" {{ Request::get('country') == 'Seychelles' ? 'selected' : '' }}>Seychelles
                </option>
                <option value="Sierra Leone" {{ Request::get('country') == 'Sierra Leone' ? 'selected' : '' }}>Sierra
                    Leone</option>
                <option value="Singapore" {{ Request::get('country') == 'Singapore' ? 'selected' : '' }}>Singapore
                </option>
                <option value="Slovakia" {{ Request::get('country') == 'Slovakia' ? 'selected' : '' }}>Slovakia
                </option>
                <option value="Slovenia" {{ Request::get('country') == 'Slovenia' ? 'selected' : '' }}>Slovenia
                </option>
                <option value="Solomon Islands" {{ Request::get('country') == 'Solomon Islands' ? 'selected' : '' }}>
                    Solomon Islands</option>
                <option value="Somalia" {{ Request::get('country') == 'Somalia' ? 'selected' : '' }}>Somalia</option>
                <option value="South Africa" {{ Request::get('country') == 'South Africa' ? 'selected' : '' }}>South
                    Africa</option>
                <option value="South Korea" {{ Request::get('country') == 'South Korea' ? 'selected' : '' }}>South
                    Korea</option>
                <option value="Spain" {{ Request::get('country') == 'Spain' ? 'selected' : '' }}>Spain</option>
                <option value="Sri Lanka" {{ Request::get('country') == 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka
                </option>
                <option value="Sudan" {{ Request::get('country') == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                <option value="Suriname" {{ Request::get('country') == 'Suriname' ? 'selected' : '' }}>Suriname
                </option>
                <option value="Svalbard" {{ Request::get('country') == 'Svalbard' ? 'selected' : '' }}>Svalbard
                </option>
                <option value="Swaziland" {{ Request::get('country') == 'Swaziland' ? 'selected' : '' }}>Swaziland
                </option>
                <option value="Sweden" {{ Request::get('country') == 'Sweden' ? 'selected' : '' }}>Sweden</option>
                <option value="Switzerland" {{ Request::get('country') == 'Switzerland' ? 'selected' : '' }}>
                    Switzerland</option>
                <option value="Syria" {{ Request::get('country') == 'Syria' ? 'selected' : '' }}>Syria</option>
                <option value="Taiwan" {{ Request::get('country') == 'Taiwan' ? 'selected' : '' }}>Taiwan</option>
                <option value="Tajikistan" {{ Request::get('country') == 'Tajikistan' ? 'selected' : '' }}>Tajikistan
                </option>
                <option value="Tanzania" {{ Request::get('country') == 'Tanzania' ? 'selected' : '' }}>Tanzania
                </option>
                <option value="Thailand" {{ Request::get('country') == 'Thailand' ? 'selected' : '' }}>Thailand
                </option>
                <option value="Timorleste" {{ Request::get('country') == 'Timorleste' ? 'selected' : '' }}>Timorleste
                </option>
                <option value="Togo" {{ Request::get('country') == 'Togo' ? 'selected' : '' }}>Togo</option>
                <option value="Tokelau" {{ Request::get('country') == 'Tokelau' ? 'selected' : '' }}>Tokelau</option>
                <option value="Tonga" {{ Request::get('country') == 'Tonga' ? 'selected' : '' }}>Tonga</option>
                <option value="Trinidad" {{ Request::get('country') == 'Trinidad' ? 'selected' : '' }}>Trinidad
                </option>
                <option value="Tunisia" {{ Request::get('country') == 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
                <option value="Turkey" {{ Request::get('country') == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                <option value="Turkmenistan" {{ Request::get('country') == 'Turkmenistan' ? 'selected' : '' }}>
                    Turkmenistan</option>
                <option value="Tuvalu" {{ Request::get('country') == 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                <option value="Uganda" {{ Request::get('country') == 'Uganda' ? 'selected' : '' }}>Uganda</option>
                <option value="Ukraine" {{ Request::get('country') == 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                <option value="United Arab Emirates"
                    {{ Request::get('country') == 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates
                </option>
                <option value="United States" {{ Request::get('country') == 'United States' ? 'selected' : '' }}>
                    United States</option>
                <option value="Uruguay" {{ Request::get('country') == 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                <option value="Us Minor Islands"
                    {{ Request::get('country') == 'Us Minor Islands' ? 'selected' : '' }}>Us Minor Islands</option>
                <option value="Us Virgin Islands"
                    {{ Request::get('country') == 'Us Virgin Islands' ? 'selected' : '' }}>Us Virgin Islands</option>
                <option value="Uzbekistan" {{ Request::get('country') == 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan
                </option>
                <option value="Vanuatu" {{ Request::get('country') == 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                <option value="Vatican City" {{ Request::get('country') == 'Vatican City' ? 'selected' : '' }}>
                    Vatican City</option>
                <option value="Venezuela" {{ Request::get('country') == 'Venezuela' ? 'selected' : '' }}>Venezuela
                </option>
                <option value="Vietnam" {{ Request::get('country') == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                <option value="Wallis and Futuna"
                    {{ Request::get('country') == 'Wallis and Futuna' ? 'selected' : '' }}>Wallis and Futuna</option>
                <option value="Western Sahara" {{ Request::get('country') == 'Western Sahara' ? 'selected' : '' }}>
                    Western Sahara</option>
                <option value="Yemen" {{ Request::get('country') == 'Yemen' ? 'selected' : '' }}>Yemen</option>
                <option value="Zambia" {{ Request::get('country') == 'Zambia' ? 'selected' : '' }}>Zambia</option>
                <option value="Zimbabwe" {{ Request::get('country') == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe
                </option>
            </select>
            {{-- 国検索ここまで --}}
            {{-- 日程検索 --}}
            <input type="date" name="calendar" class="date" max="9999-12-31"
                value="{{ Request::get('calendar') }}"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-half py-2 px-3">
            <input type="submit" value="search" class="btn btn-info">
        </div>
    </form>



    {{-- 新規投稿 --}}
    <x-dropdown-link :href="route('dinners.create')">
        {{ __('新規投稿') }}
    </x-dropdown-link>
    <form method="POST" action="{{ route('logout') }}">
        {{-- class="create" --}}
        @csrf

        <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">
            <x-flash-message :message="session('notice')" />
            <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">

                @foreach ($dinners as $dinner)
                    <article class="w-full px-4 md:w-1/2 text-xl text-gray-800 leading-normal">
                        <a href="{{ route('dinners.show', $dinner) }}">
                            <h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl">
                                {{ $dinner->title }}</h2>
                            <h3>{{ $dinner->country }}</h3>
                            <h3>日程:{{ $dinner->calendar }}</h3>
                            <h3>{{ $dinner->user->name }}</h3>
                            <div class="dinner_box">
                                @if (isset($dinner->category))
                                    <h3>language:{{ $dinner->category->name }}</h3>
                                    <h3>{{ $dinner->other }}</h3>
                                @endif
                                {{-- <h3>language:{{ $dinner->category->name }}</h3>
                                <h3>  :{{ $dinner->other }}</h3> --}}
                            </div>
                            <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                                投稿日: {{ $dinner->created_at }}
                            </p>
                            {{-- <img class="w-full mb-2" src="{{ Storage::url($dinner->image_path) }}" alt=""> --}}
                            <p class="text-gray-700 text-base">{{ Str::limit($dinner->description, 50) }}</p>
                        </a>
                        {{-- <p class="font-black">お気に入り数：{{ $dinner->favorites->count() }}</p> --}}
                    </article>
                @endforeach
            </div>

            {{ $dinners->links() }}
        </div>
</x-app-layout>
