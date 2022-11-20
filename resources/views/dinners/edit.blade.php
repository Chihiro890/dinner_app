<x-app-layout>
    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-white shadow-md">
        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">
            投稿更新
        </h2>
        <x-validation-errors :errors="$errors" />
        {{-- @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 my-2" role="alert">
                <p>
                    <b>{{ count($errors) }}件のエラーがあります。</b>
                </p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form action="{{ route('dinners.update', $dinner) }}" method="POST" enctype="multipart/form-data"
            class="rounded pt-3 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="title">
                    タイトル
                </label>
                <input type="text" name="title"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="タイトル" value="{{ old('title', $dinner->title) }}">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="category">
                    言語
                </label>
                @foreach ($categories as $category)
                    {{-- <div> --}}
                    <input type="radio" name="category_id" id="category{{ $category->id }}"
                        value="{{ $category->id }}"
                        {{ old('category_id', $dinner->category_id) == $category->id ? 'checked' : '' }}>
                    <label for="category{{ $category->id }}">{{ $category->name }}</label>
                    {{-- </div> --}}
                @endforeach
                <input type="radio" name="category_id" id="category" value=""
                    {{ old('category_id') == $category->id ? 'checked' : '' }}>
                <label for="category">Other</label>

            </div>
            <label class="block text-gray-700 text-sm mb-2" for="other">
            </label>
            <input type="text" name="other"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                placeholder="other lnguage" value="{{ old('other', $dinner->other) }}">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="calendar">
                    日程
            </div>
            <input type="date" name="calendar" max="9999-12-31"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-half py-2 px-3"
                value="{{ old('calendar', $dinner->calendar) }}">



            <div class="mb-4">
                {{-- <input type="string" name="country"> --}}
                <label class="block text-gray-700 text-sm mb-2" for="country">
                    国
            </div>
            </label>
            <select name="country">
                <option value="">選択してください</option>
                <option value="Aland Islands" {{ $dinner->country == 'Aland Islands' ? 'selected' : '' }}>Aland Islands
                </option>
                <option value="Albania" {{ $dinner->country == 'Albania' ? 'selected' : '' }}>Albania</option>
                <option value="Algeria" {{ $dinner->country == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                <option value="American Samoa" {{ $dinner->country == 'American Samoa' ? 'selected' : '' }}>American
                    Samoa</option>
                <option value="Andorra" {{ $dinner->country == 'Andorra' ? 'selected' : '' }}>Andorra</option>
                <option value="Angola" {{ $dinner->country == 'Angola' ? 'selected' : '' }}>Angola</option>
                <option value="Anguilla" {{ $dinner->country == 'Anguilla' ? 'selected' : '' }}>Anguilla</option>
                <option value="Antigua" {{ $dinner->country == 'Antigua' ? 'selected' : '' }}>Antigua</option>
                <option value="Argentina" {{ $dinner->country == 'Argentina' ? 'selected' : '' }}>Argentina</option>
                <option value="Armenia" {{ $dinner->country == 'Armenia' ? 'selected' : '' }}>Armenia</option>
                <option value="Aruba" {{ $dinner->country == 'Aruba' ? 'selected' : '' }}>Aruba</option>
                <option value="Australia" {{ $dinner->country == 'Australia' ? 'selected' : '' }}>Australia</option>
                <option value="Austria" {{ $dinner->country == 'Austria' ? 'selected' : '' }}>Austria</option>
                <option value="Azerbaijan" {{ $dinner->country == 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
                <option value="Bahamas" {{ $dinner->country == 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
                <option value="Bahrain" {{ $dinner->country == 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                <option value="Bangladesh" {{ $dinner->country == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                <option value="Barbados" {{ $dinner->country == 'Barbados' ? 'selected' : '' }}>Barbados</option>
                <option value="Belarus" {{ $dinner->country == 'Belarus' ? 'selected' : '' }}>Belarus</option>
                <option value="Belgium" {{ $dinner->country == 'Belgium' ? 'selected' : '' }}>Belgium</option>
                <option value="Belize" {{ $dinner->country == 'Belize' ? 'selected' : '' }}>Belize</option>
                <option value="Benin" {{ $dinner->country == 'Benin' ? 'selected' : '' }}>Benin</option>
                <option value="Bermuda" {{ $dinner->country == 'Bermuda' ? 'selected' : '' }}>Bermuda</option>
                <option value="Bhutan" {{ $dinner->country == 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
                <option value="Bolivia" {{ $dinner->country == 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                <option value="Bosnia" {{ $dinner->country == 'Bosnia' ? 'selected' : '' }}>Bosnia</option>
                <option value="Botswana" {{ $dinner->country == 'Botswana' ? 'selected' : '' }}>Botswana</option>
                <option value="Bouvet Island" {{ $dinner->country == 'Bouvet Island' ? 'selected' : '' }}>Bouvet Island
                </option>
                <option value="Brazil" {{ $dinner->country == 'Brazil' ? 'selected' : '' }}>Brazil</option>
                <option value="British Virgin Islands"
                    {{ $dinner->country == 'British Virgin Islands' ? 'selected' : '' }}>British Virgin Islands
                </option>
                <option value="Brunei" {{ $dinner->country == 'Brunei' ? 'selected' : '' }}>Brunei</option>
                <option value="Bulgaria" {{ $dinner->country == 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                <option value="Burkina Faso" {{ $dinner->country == 'Burkina Faso' ? 'selected' : '' }}>Burkina Faso
                </option>
                <option value="Burma" {{ $dinner->country == 'Burma' ? 'selected' : '' }}>Burma</option>
                <option value="Burundi" {{ $dinner->country == 'Burundi' ? 'selected' : '' }}>Burundi</option>
                <option value="Caicos Islands" {{ $dinner->country == 'Caicos Islands' ? 'selected' : '' }}>Caicos
                    Islands</option>
                <option value="Cambodia" {{ $dinner->country == 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
                <option value="Cameroon" {{ $dinner->country == 'Cameroon' ? 'selected' : '' }}>Cameroon</option>
                <option value="Canada" {{ $dinner->country == 'Canada' ? 'selected' : '' }}>Canada</option>
                <option value="Cape Verde" {{ $dinner->country == 'Cape Verde' ? 'selected' : '' }}>Cape Verde</option>
                <option value="Cayman Islands" {{ $dinner->country == 'Cayman Islands' ? 'selected' : '' }}>Cayman
                    Islands</option>
                <option value="Central African Republic"
                    {{ $dinner->country == 'Central African Republic' ? 'selected' : '' }}>Central African Republic
                </option>
                <option value="Chad" {{ $dinner->country == 'Chad' ? 'selected' : '' }}>Chad</option>
                <option value="Chile" {{ $dinner->country == 'Chile' ? 'selected' : '' }}>Chile</option>
                <option value="China" {{ $dinner->country == 'China' ? 'selected' : '' }}>China</option>
                <option value="Christmas Island" {{ $dinner->country == 'Christmas Island' ? 'selected' : '' }}>
                    Christmas Island</option>
                <option value="Cocos Islands" {{ $dinner->country == 'Cocos Islands' ? 'selected' : '' }}>Cocos Islands
                </option>
                <option value="Colombia" {{ $dinner->country == 'Colombia' ? 'selected' : '' }}>Colombia</option>
                <option value="Comoros" {{ $dinner->country == 'Comoros' ? 'selected' : '' }}>Comoros</option>
                <option value="Congo Brazzaville" {{ $dinner->country == 'Congo Brazzaville' ? 'selected' : '' }}>Congo
                    Brazzaville</option>
                <option value="Congo" {{ $dinner->country == 'Congo' ? 'selected' : '' }}>Congo</option>
                <option value="Cook Islands" {{ $dinner->country == 'Cook Islands' ? 'selected' : '' }}>Cook Islands
                </option>
                <option value="Costa Rica" {{ $dinner->country == 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
                <option value="Cote Divoire" {{ $dinner->country == 'Cote Divoire' ? 'selected' : '' }}>Cote Divoire
                </option>
                <option value="Croatia" {{ $dinner->country == 'Croatia' ? 'selected' : '' }}>Croatia</option>
                <option value="Cuba" {{ $dinner->country == 'Cuba' ? 'selected' : '' }}>Cuba</option>
                <option value="Cyprus" {{ $dinner->country == 'Cyprus' ? 'selected' : '' }}>Cyprus</option>
                <option value="Czech Republic" {{ $dinner->country == 'Czech Republic' ? 'selected' : '' }}>Czech
                    Republic</option>
                <option value="Denmark" {{ $dinner->country == 'Denmark' ? 'selected' : '' }}>Denmark</option>
                <option value="Djibouti" {{ $dinner->country == 'Djibouti' ? 'selected' : '' }}>Djibouti</option>
                <option value="Dominica" {{ $dinner->country == 'Dominica' ? 'selected' : '' }}>Dominica</option>
                <option value="Dominican Republic" {{ $dinner->country == 'Dominican Republic' ? 'selected' : '' }}>
                    Dominican Republic</option>
                <option value="Ecuador" {{ $dinner->country == 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                <option value="Egypt" {{ $dinner->country == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                <option value="El Salvador" {{ $dinner->country == 'El Salvador' ? 'selected' : '' }}>El Salvador
                </option>
                <option value="England" {{ $dinner->country == 'England' ? 'selected' : '' }}>England</option>
                <option value="Equatorial Guinea" {{ $dinner->country == 'Equatorial Guinea' ? 'selected' : '' }}>
                    Equatorial Guinea</option>
                <option value="Eritrea" {{ $dinner->country == 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
                <option value="Estonia" {{ $dinner->country == 'Estonia' ? 'selected' : '' }}>Estonia</option>
                <option value="Ethiopia" {{ $dinner->country == 'Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
                <option value="European Union" {{ $dinner->country == 'European Union' ? 'selected' : '' }}>European
                    Union</option>
                <option value="Falkland Islands" {{ $dinner->country == 'Falkland Islands' ? 'selected' : '' }}>
                    Falkland Islands</option>
                <option value="Faroe Islands" {{ $dinner->country == 'Faroe Islands' ? 'selected' : '' }}>Faroe
                    Islands</option>
                <option value="Fiji" {{ $dinner->country == 'Fiji' ? 'selected' : '' }}>Fiji</option>
                <option value="Finland" {{ $dinner->country == 'Finland' ? 'selected' : '' }}>Finland</option>
                <option value="France" {{ $dinner->country == 'France' ? 'selected' : '' }}>France</option>
                <option value="French Guiana" {{ $dinner->country == 'French Guiana' ? 'selected' : '' }}>French
                    Guiana</option>
                <option value="French Polynesia" {{ $dinner->country == 'French Polynesia' ? 'selected' : '' }}>French
                    Polynesia</option>
                <option value="French Territories" {{ $dinner->country == 'French Territories' ? 'selected' : '' }}>
                    French Territories</option>
                <option value="Gabon" {{ $dinner->country == 'Gabon' ? 'selected' : '' }}>Gabon</option>
                <option value="Gambia" {{ $dinner->country == 'Gambia' ? 'selected' : '' }}>Gambia</option>
                <option value="Georgia" {{ $dinner->country == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                <option value="Germany" {{ $dinner->country == 'Germany' ? 'selected' : '' }}>Germany</option>
                <option value="Ghana" {{ $dinner->country == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                <option value="Gibraltar" {{ $dinner->country == 'Gibraltar' ? 'selected' : '' }}>Gibraltar</option>
                <option value="Greece" {{ $dinner->country == 'Greece' ? 'selected' : '' }}>Greece</option>
                <option value="Greenland" {{ $dinner->country == 'Greenland' ? 'selected' : '' }}>Greenland</option>
                <option value="Grenada" {{ $dinner->country == 'Grenada' ? 'selected' : '' }}>Grenada</option>
                <option value="Guadeloupe" {{ $dinner->country == 'Guadeloupe' ? 'selected' : '' }}>Guadeloupe
                </option>
                <option value="Guam" {{ $dinner->country == 'Guam' ? 'selected' : '' }}>Guam</option>
                <option value="Guatemala" {{ $dinner->country == 'Guatemala' ? 'selected' : '' }}>Guatemala</option>
                <option value="Guinea-Bissau" {{ $dinner->country == 'Guinea-Bissau' ? 'selected' : '' }}>
                    Guinea-Bissau</option>
                <option value="Guinea" {{ $dinner->country == 'Guinea' ? 'selected' : '' }}>Guinea</option>
                <option value="Guyana" {{ $dinner->country == 'Guyana' ? 'selected' : '' }}>Guyana</option>
                <option value="Haiti" {{ $dinner->country == 'Haiti' ? 'selected' : '' }}>Haiti</option>
                <option value="Heard Island" {{ $dinner->country == 'Heard Island' ? 'selected' : '' }}>Heard Island
                </option>
                <option value="Honduras" {{ $dinner->country == 'Honduras' ? 'selected' : '' }}>Honduras</option>
                <option value="Hong Kong" {{ $dinner->country == 'Hong Kong' ? 'selected' : '' }}>Hong Kong</option>
                <option value="Hungary" {{ $dinner->country == 'Hungary' ? 'selected' : '' }}>Hungary</option>
                <option value="Iceland" {{ $dinner->country == 'Iceland' ? 'selected' : '' }}>Iceland</option>
                <option value="India" {{ $dinner->country == 'India' ? 'selected' : '' }}>India</option>
                <option value="Indian Ocean Territory"
                    {{ $dinner->country == 'Indian Ocean Territory' ? 'selected' : '' }}>Indian Ocean Territory
                </option>
                <option value="Indonesia" {{ $dinner->country == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                <option value="Iran" {{ $dinner->country == 'Iran' ? 'selected' : '' }}>Iran</option>
                <option value="Iraq" {{ $dinner->country == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                <option value="Ireland" {{ $dinner->country == 'Ireland' ? 'selected' : '' }}>Ireland</option>
                <option value="Israel" {{ $dinner->country == 'Israel' ? 'selected' : '' }}>Israel</option>
                <option value="Italy" {{ $dinner->country == 'Italy' ? 'selected' : '' }}>Italy</option>
                <option value="Jamaica" {{ $dinner->country == 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
                <option value="Japan" {{ $dinner->country == 'Japan' ? 'selected' : '' }}>Japan</option>
                <option value="Jordan" {{ $dinner->country == 'Jordan' ? 'selected' : '' }}>Jordan</option>
                <option value="Kazakhstan" {{ $dinner->country == 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan
                </option>
                <option value="Kenya" {{ $dinner->country == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                <option value="Kiribati" {{ $dinner->country == 'Kiribati' ? 'selected' : '' }}>Kiribati</option>
                <option value="Kuwait" {{ $dinner->country == 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
                <option value="Kyrgyzstan" {{ $dinner->country == 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan
                </option>
                <option value="Laos" {{ $dinner->country == 'Laos' ? 'selected' : '' }}>Laos</option>
                <option value="Latvia" {{ $dinner->country == 'Latvia' ? 'selected' : '' }}>Latvia</option>
                <option value="Lebanon" {{ $dinner->country == 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
                <option value="Lesotho" {{ $dinner->country == 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
                <option value="Liberia" {{ $dinner->country == 'Liberia' ? 'selected' : '' }}>Liberia</option>
                <option value="Libya" {{ $dinner->country == 'Libya' ? 'selected' : '' }}>Libya</option>
                <option value="Liechtenstein" {{ $dinner->country == 'Liechtenstein' ? 'selected' : '' }}>
                    Liechtenstein</option>
                <option value="Lithuania" {{ $dinner->country == 'Lithuania' ? 'selected' : '' }}>Lithuania</option>
                <option value="Luxembourg" {{ $dinner->country == 'Luxembourg' ? 'selected' : '' }}>Luxembourg
                </option>
                <option value="Macau" {{ $dinner->country == 'Macau' ? 'selected' : '' }}>Macau</option>
                <option value="Macedonia" {{ $dinner->country == 'Macedonia' ? 'selected' : '' }}>Macedonia</option>
                <option value="Madagascar" {{ $dinner->country == 'Madagascar' ? 'selected' : '' }}>Madagascar
                </option>
                <option value="Malawi" {{ $dinner->country == 'Malawi' ? 'selected' : '' }}>Malawi</option>
                <option value="Malaysia" {{ $dinner->country == 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
                <option value="Maldives" {{ $dinner->country == 'Maldives' ? 'selected' : '' }}>Maldives</option>
                <option value="Mali" {{ $dinner->country == 'Mali' ? 'selected' : '' }}>Mali</option>
                <option value="Malta" {{ $dinner->country == 'Malta' ? 'selected' : '' }}>Malta</option>
                <option value="Marshall Islands" {{ $dinner->country == 'Marshall Islands' ? 'selected' : '' }}>
                    Marshall Islands</option>
                <option value="Martinique" {{ $dinner->country == 'Martinique' ? 'selected' : '' }}>Martinique
                </option>
                <option value="Mauritania" {{ $dinner->country == 'Mauritania' ? 'selected' : '' }}>Mauritania
                </option>
                <option value="Mauritius" {{ $dinner->country == 'Mauritius' ? 'selected' : '' }}>Mauritius</option>
                <option value="Mayotte" {{ $dinner->country == 'Mayotte' ? 'selected' : '' }}>Mayotte</option>
                <option value="Mexico" {{ $dinner->country == 'Mexico' ? 'selected' : '' }}>Mexico</option>
                <option value="Micronesia" {{ $dinner->country == 'Micronesia' ? 'selected' : '' }}>Micronesia
                </option>
                <option value="Moldova" {{ $dinner->country == 'Moldova' ? 'selected' : '' }}>Moldova</option>
                <option value="Monaco" {{ $dinner->country == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                <option value="Mongolia" {{ $dinner->country == 'Mongolia' ? 'selected' : '' }}>Mongolia</option>
                <option value="Montenegro" {{ $dinner->country == 'Montenegro' ? 'selected' : '' }}>Montenegro
                </option>
                <option value="Montserrat" {{ $dinner->country == 'Montserrat' ? 'selected' : '' }}>Montserrat
                </option>
                <option value="Morocco" {{ $dinner->country == 'Morocco' ? 'selected' : '' }}>Morocco</option>
                <option value="Mozambique" {{ $dinner->country == 'Mozambique' ? 'selected' : '' }}>Mozambique
                </option>
                <option value="Namibia" {{ $dinner->country == 'Namibia' ? 'selected' : '' }}>Namibia</option>
                <option value="Nauru" {{ $dinner->country == 'Nauru' ? 'selected' : '' }}>Nauru</option>
                <option value="Nepal" {{ $dinner->country == 'Nepal' ? 'selected' : '' }}>Nepal</option>
                <option value="Netherlands Antilles"
                    {{ $dinner->country == 'Netherlands Antilles' ? 'selected' : '' }}>Netherlands Antilles</option>
                <option value="Netherlands" {{ $dinner->country == 'Netherlands' ? 'selected' : '' }}>Netherlands
                </option>
                <option value="New Caledonia" {{ $dinner->country == 'New Caledonia' ? 'selected' : '' }}>New
                    Caledonia</option>
                <option value="New Guinea" {{ $dinner->country == 'New Guinea' ? 'selected' : '' }}>New Guinea
                </option>
                <option value="New Zealand" {{ $dinner->country == 'New Zealand' ? 'selected' : '' }}>New Zealand
                </option>
                <option value="Nicaragua" {{ $dinner->country == 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                <option value="Niger" {{ $dinner->country == 'Niger' ? 'selected' : '' }}>Niger</option>
                <option value="Nigeria" {{ $dinner->country == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                <option value="Niue" {{ $dinner->country == 'Niue' ? 'selected' : '' }}>Niue</option>
                <option value="Norfolk Island" {{ $dinner->country == 'Norfolk Island' ? 'selected' : '' }}>Norfolk
                    Island</option>
                <option value="North Korea" {{ $dinner->country == 'North Korea' ? 'selected' : '' }}>North Korea
                </option>
                <option value="Northern Mariana Islands"
                    {{ $dinner->country == 'Northern Mariana Islands' ? 'selected' : '' }}>Northern Mariana Islands
                </option>
                <option value="Norway" {{ $dinner->country == 'Norway' ? 'selected' : '' }}>Norway</option>
                <option value="Oman" {{ $dinner->country == 'Oman' ? 'selected' : '' }}>Oman</option>
                <option value="Pakistan" {{ $dinner->country == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                <option value="Palau" {{ $dinner->country == 'Palau' ? 'selected' : '' }}>Palau</option>
                <option value="Palestine" {{ $dinner->country == 'Palestine' ? 'selected' : '' }}>Palestine</option>
                <option value="Panama" {{ $dinner->country == 'Panama' ? 'selected' : '' }}>Panama</option>
                <option value="Paraguay" {{ $dinner->country == 'Paraguay' ? 'selected' : '' }}>Paraguay</option>
                <option value="Peru" {{ $dinner->country == 'Peru' ? 'selected' : '' }}>Peru</option>
                <option value="Philippines" {{ $dinner->country == 'Philippines' ? 'selected' : '' }}>Philippines
                </option>
                <option value="Pitcairn Islands" {{ $dinner->country == 'Pitcairn Islands' ? 'selected' : '' }}>
                    Pitcairn Islands</option>
                <option value="Poland" {{ $dinner->country == 'Poland' ? 'selected' : '' }}>Poland</option>
                <option value="Portugal" {{ $dinner->country == 'Portugal' ? 'selected' : '' }}>Portugal</option>
                <option value="Puerto Rico" {{ $dinner->country == 'Puerto Rico' ? 'selected' : '' }}>Puerto Rico
                </option>
                <option value="Qatar" {{ $dinner->country == 'Qatar' ? 'selected' : '' }}>Qatar</option>
                <option value="Reunion" {{ $dinner->country == 'Reunion' ? 'selected' : '' }}>Reunion</option>
                <option value="Romania" {{ $dinner->country == 'Romania' ? 'selected' : '' }}>Romania</option>
                <option value="Russia" {{ $dinner->country == 'Russia' ? 'selected' : '' }}>Russia</option>
                <option value="Rwanda" {{ $dinner->country == 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
                <option value="Saint Helena" {{ $dinner->country == 'Saint Helena' ? 'selected' : '' }}>Saint Helena
                </option>
                <option value="Saint Kitts and Nevis"
                    {{ $dinner->country == 'Saint Kitts and Nevis' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
                <option value="Saint Lucia" {{ $dinner->country == 'Saint Lucia' ? 'selected' : '' }}>Saint Lucia
                </option>
                <option value="Saint Pierre" {{ $dinner->country == 'Saint Pierre' ? 'selected' : '' }}>Saint Pierre
                </option>
                <option value="Saint Vincent" {{ $dinner->country == 'Saint Vincent' ? 'selected' : '' }}>Saint
                    Vincent</option>
                <option value="Samoa" {{ $dinner->country == 'Samoa' ? 'selected' : '' }}>Samoa</option>
                <option value="San Marino" {{ $dinner->country == 'San Marino' ? 'selected' : '' }}>San Marino
                </option>
                <option value="Sandwich Islands" {{ $dinner->country == 'Sandwich Islands' ? 'selected' : '' }}>
                    Sandwich Islands</option>
                <option value="Sao Tome" {{ $dinner->country == 'Sao Tome' ? 'selected' : '' }}>Sao Tome</option>
                <option value="Saudi Arabia" {{ $dinner->country == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia
                </option>
                <option value="Senegal" {{ $dinner->country == 'Senegal' ? 'selected' : '' }}>Senegal</option>
                <option value="Serbia" {{ $dinner->country == 'Serbia' ? 'selected' : '' }}>Serbia</option>
                <option value="Serbia" {{ $dinner->country == 'Serbia' ? 'selected' : '' }}>Serbia</option>
                <option value="Seychelles" {{ $dinner->country == 'Seychelles' ? 'selected' : '' }}>Seychelles
                </option>
                <option value="Sierra Leone" {{ $dinner->country == 'Sierra Leone' ? 'selected' : '' }}>Sierra Leone
                </option>
                <option value="Singapore" {{ $dinner->country == 'Singapore' ? 'selected' : '' }}>Singapore</option>
                <option value="Slovakia" {{ $dinner->country == 'Slovakia' ? 'selected' : '' }}>Slovakia</option>
                <option value="Slovenia" {{ $dinner->country == 'Slovenia' ? 'selected' : '' }}>Slovenia</option>
                <option value="Solomon Islands" {{ $dinner->country == 'Solomon Islands' ? 'selected' : '' }}>Solomon
                    Islands</option>
                <option value="Somalia" {{ $dinner->country == 'Somalia' ? 'selected' : '' }}>Somalia</option>
                <option value="South Africa" {{ $dinner->country == 'South Africa' ? 'selected' : '' }}>South Africa
                </option>
                <option value="South Korea" {{ $dinner->country == 'South Korea' ? 'selected' : '' }}>South Korea
                </option>
                <option value="Spain" {{ $dinner->country == 'Spain' ? 'selected' : '' }}>Spain</option>
                <option value="Sri Lanka" {{ $dinner->country == 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka</option>
                <option value="Sudan" {{ $dinner->country == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                <option value="Suriname" {{ $dinner->country == 'Suriname' ? 'selected' : '' }}>Suriname</option>
                <option value="Svalbard" {{ $dinner->country == 'Svalbard' ? 'selected' : '' }}>Svalbard</option>
                <option value="Swaziland" {{ $dinner->country == 'Swaziland' ? 'selected' : '' }}>Swaziland</option>
                <option value="Sweden" {{ $dinner->country == 'Sweden' ? 'selected' : '' }}>Sweden</option>
                <option value="Switzerland" {{ $dinner->country == 'Switzerland' ? 'selected' : '' }}>Switzerland
                </option>
                <option value="Syria" {{ $dinner->country == 'Syria' ? 'selected' : '' }}>Syria</option>
                <option value="Taiwan" {{ $dinner->country == 'Taiwan' ? 'selected' : '' }}>Taiwan</option>
                <option value="Tajikistan" {{ $dinner->country == 'Tajikistan' ? 'selected' : '' }}>Tajikistan
                </option>
                <option value="Tanzania" {{ $dinner->country == 'Tanzania' ? 'selected' : '' }}>Tanzania</option>
                <option value="Thailand" {{ $dinner->country == 'Thailand' ? 'selected' : '' }}>Thailand</option>
                <option value="Timorleste" {{ $dinner->country == 'Timorleste' ? 'selected' : '' }}>Timorleste
                </option>
                <option value="Togo" {{ $dinner->country == 'Togo' ? 'selected' : '' }}>Togo</option>
                <option value="Tokelau" {{ $dinner->country == 'Tokelau' ? 'selected' : '' }}>Tokelau</option>
                <option value="Tonga" {{ $dinner->country == 'Tonga' ? 'selected' : '' }}>Tonga</option>
                <option value="Trinidad" {{ $dinner->country == 'Trinidad' ? 'selected' : '' }}>Trinidad</option>
                <option value="Tunisia" {{ $dinner->country == 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
                <option value="Turkey" {{ $dinner->country == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                <option value="Turkmenistan" {{ $dinner->country == 'Turkmenistan' ? 'selected' : '' }}>Turkmenistan
                </option>
                <option value="Tuvalu" {{ $dinner->country == 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                <option value="Uganda" {{ $dinner->country == 'Uganda' ? 'selected' : '' }}>Uganda</option>
                <option value="Ukraine" {{ $dinner->country == 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                <option value="United Arab Emirates"
                    {{ $dinner->country == 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                <option value="United States" {{ $dinner->country == 'United States' ? 'selected' : '' }}>United
                    States</option>
                <option value="Uruguay" {{ $dinner->country == 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                <option value="Us Minor Islands" {{ $dinner->country == 'Us Minor Islands' ? 'selected' : '' }}>Us
                    Minor Islands</option>
                <option value="Us Virgin Islands" {{ $dinner->country == 'Us Virgin Islands' ? 'selected' : '' }}>Us
                    Virgin Islands</option>
                <option value="Uzbekistan" {{ $dinner->country == 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan
                </option>
                <option value="Vanuatu" {{ $dinner->country == 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                <option value="Vatican City" {{ $dinner->country == 'Vatican City' ? 'selected' : '' }}>Vatican City
                </option>
                <option value="Venezuela" {{ $dinner->country == 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                <option value="Vietnam" {{ $dinner->country == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                <option value="Wallis and Futuna" {{ $dinner->country == 'Wallis and Futuna' ? 'selected' : '' }}>
                    Wallis and Futuna</option>
                <option value="Western Sahara" {{ $dinner->country == 'Western Sahara' ? 'selected' : '' }}>Western
                    Sahara</option>
                <option value="Yemen" {{ $dinner->country == 'Yemen' ? 'selected' : '' }}>Yemen</option>
                <option value="Zambia" {{ $dinner->country == 'Zambia' ? 'selected' : '' }}>Zambia</option>
                <option value="Zimbabwe" {{ $dinner->country == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
            </select>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="description">
                    詳細
                </label>
                <textarea name="description" rows="10"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required>{{ old('description', $dinner->description) }}</textarea>
            </div>

            {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="image">
                    食事の画像
                </label>
                <img src="{{ Storage::url($dinner->image_path) }}" alt="" class="mb-4 md:w-2/5 sm:auto">
                <input type="file" name="image" class="border-gray-300">
            </div> --}}
            <input type="submit" value="更新"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
    </div>
</x-app-layout>
