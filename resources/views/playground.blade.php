<x-coda-app title="Home">
    <div class="layout--app">
        <main class="content">
            <div class="content__inner">
                <div class="ui container-fluid content__body p-3">

                    <!-- coda panel -->
                    <h2 class="ui header m-b-2">
                        Panel
                        <div class="sub header">Semua konten yang merupakan satu kesatuan wajib dibungkus dalam sebuah
                            panel
                        </div>
                    </h2>
                    <div class="ui grid equal width">
                        <div class="column">
                            <x-coda-panel title="Panel">
                                <div class="ui placeholder">
                                    <div class="image header">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                    <div class="paragraph">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </x-coda-panel>
                        </div>
                        <div class="column">
                            <x-coda-panel title="Panel With Icon" icon="rocket">
                                <div class="ui placeholder">
                                    <div class="image header">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                    <div class="paragraph">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </x-coda-panel>
                        </div>
                        <div class="row">
                            <div class="column">
                                <x-coda-panel title="Panel With Footer">
                                    <div class="ui placeholder">
                                        <div class="image header">
                                            <div class="line"></div>
                                            <div class="line"></div>
                                        </div>
                                        <div class="paragraph">
                                            <div class="line"></div>
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                    <x-slot name="footer">
                                        Footer
                                    </x-slot>
                                </x-coda-panel>
                            </div>
                            <div class="column">
                                <x-coda-panel title="Panel With Action">
                                    <div class="ui placeholder">
                                        <div class="image header">
                                            <div class="line"></div>
                                            <div class="line"></div>
                                        </div>
                                        <div class="paragraph">
                                            <div class="line"></div>
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                    <x-slot name="action">
                                        <x-coda-link url="#" icon="edit" class="mini">Edit</x-coda-link>
                                    </x-slot>
                                    <x-slot name="footer">
                                        Footer
                                    </x-slot>
                                </x-coda-panel>
                            </div>
                        </div>
                    </div>
                    <!-- end coda panel -->

                    <div class="ui divider hidden"></div>

                    <!-- coda card -->
                    <h2 class="ui header m-b-2">
                        Card
                        <div class="sub header">
                            Card adalah representasi khusus panel yang biasanya disajikan dalam bentuk grid.
                            Card dalam satu row dijamin memiliki height yang sama.
                        </div>
                    </h2>
                    <x-coda-cards>
                        <x-coda-card meta.before="<i class='icon coins yellow'></i> 100 poin"
                            title="Increase confidence with TrustPilot reviews"
                            content="Many people also have their own barometers for what makes a cute dog." url="#">
                            <x-slot name="body">
                                <div class="content">
                                    <div class="description">
                                        <x-coda-label label="foo" color="theme solid"></x-coda-label>
                                        <x-coda-label label="bar" color="theme secondary"></x-coda-label>
                                    </div>
                                </div>
                            </x-slot>
                            <x-coda-card-footer left='<i class="icon check"></i> 121 votes' right="right" />
                        </x-coda-card>
                        <x-coda-card meta.before="<i class='icon coins yellow'></i> 100 poin"
                            title="Increase confidence with TrustPilot reviews"
                            content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque culpa distinctio facilis minima neque quas. Consequatur delectus distinctio ducimus expedita minus mollitia odio officia pariatur quod, totam. Cumque, provident.">
                            <x-coda-card-footer left='<i class="icon check"></i> 121 votes' right="right" />
                        </x-coda-card>
                        <x-coda-card meta.before="<i class='icon coins yellow'></i> 100 poin"
                            title="Increase confidence with TrustPilot reviews"
                            content="Many people also have their own barometers for what makes a cute dog.">
                            <x-coda-card-footer left='<i class="icon check"></i> 121 votes' right="right" />
                        </x-coda-card>
                    </x-coda-cards>
                    <!-- end coda card -->

                    <div class="ui divider hidden"></div>

                    <!-- coda modal -->
                    <x-coda-panel title="Modal" style="height: 300px">
                        <div class="ui modal active">
                            <i class="close icon"></i>
                            <div class="header">
                                Profile Picture
                            </div>
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa deleniti, eum ex harum
                                impedit iste iusto magnam magni nam nemo omnis perferendis quisquam quos sequi soluta
                                totam vel voluptate, voluptatibus.
                            </div>
                            <div class="actions">
                                <x-coda-button class="secondary">Nope</x-coda-button>
                                <x-coda-button>Yep</x-coda-button>
                            </div>
                        </div>
                    </x-coda-panel>
                    <!-- end coda modal -->

                    <div class="ui divider hidden"></div>

                    <!-- coda tab -->
                    <x-coda-panel title="Tab">
                        <x-coda-tab>
                            <x-coda-tab-content title="Another First" active>Another First</x-coda-tab-content>
                            <x-coda-tab-content title="Another Second">Another Second</x-coda-tab-content>
                        </x-coda-tab>
                        <x-coda-tab>
                            <x-coda-tab-content title="First" active>First</x-coda-tab-content>
                            <x-coda-tab-content title="Second">Second</x-coda-tab-content>
                        </x-coda-tab>
                    </x-coda-panel>
                    <!-- end coda tab -->

                    <div class="ui divider hidden"></div>

                    <!-- coda data definition -->
                    <div class="ui grid equal width">
                        <div class="column">
                            <x-coda-panel title="Data Definition">
                                <table class="ui table definition">
                                    <caption>Profil</caption>
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>Bayu Hendra</td>
                                        </tr>
                                        <tr>
                                            <td>Posisi</td>
                                            <td>Programmer</td>
                                        </tr>
                                        <tr>
                                            <td>Lokasi</td>
                                            <td>Indonesia</td>
                                        </tr>
                                        <tr>
                                            <td>Bio</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                                                ipsum nisi placeat possimus tenetur. Ad dicta dolores ducimus natus
                                                nihil officiis repellat ullam! Facere laboriosam necessitatibus pariatur
                                                quae qui rem!
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </x-coda-panel>
                        </div>
                    </div>
                    <!-- end coda data definition -->

                    <div class="ui divider hidden"></div>

                    <!-- coda table -->
                    <!-- end coda table -->

                    <div class="ui divider hidden"></div>

                    <!-- coda typografi -->
                    <x-coda-panel title="Typography">
                        <h1 class="ui header">Heading 1</h1>
                        <h2 class="ui header">Heading 2</h2>
                        <h3 class="ui header">Heading 3</h3>
                        <h4 class="ui header">Heading 4</h4>
                        <h5 class="ui header">Heading 5</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, doloribus fugit
                            inventore quaerat
                            quas quis ratione saepe sint totam. Distinctio laborum praesentium sit tempore voluptatem.
                            Aspernatur odio
                            provident repellat voluptate.
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, doloribus fugit
                            inventore quaerat
                            quas quis ratione saepe sint totam. Distinctio laborum praesentium sit tempore voluptatem.
                            Aspernatur odio
                            provident repellat voluptate.
                        </p>
                        <div class="ui divider section"></div>
                        <div class="ui container text">
                            <h1 class="ui header">Text Container</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur corporis cumque
                                distinctio dolore
                                ea enim et expedita in nobis nulla odit possimus quae quam quas quos reiciendis tempore
                                temporibus,
                                veritatis!
                            </p>
                        </div>
                        <div class="ui divider section"></div>
                        <div class="ui right floated horizontal list" themed>
                            <div class="disabled item" href="#">© GitHub, Inc.</div>
                            <a class="item" href="#">Terms</a>
                            <a class="item" href="#">Privacy</a>
                            <a class="item" href="#">Contact</a>
                        </div>
                        <div class="ui horizontal list">
                            <a class="item" href="#">About Us</a>
                            <a class="item" href="#">Jobs</a>
                        </div>
                    </x-coda-panel>
                    <!-- end coda typografi -->

                    <div class="ui divider hidden"></div>

                    <!-- coda button -->
                    <x-coda-panel title="Button">
                        <x-coda-button label="Primary Button"></x-coda-button>
                        <x-coda-button label="Secondary Button" class="secondary"></x-coda-button>
                        <x-coda-button label="Basic Button" class="basic"></x-coda-button>
                        <div class="ui divider section"></div>
                        <div class="ui buttons">
                            <x-coda-button label="Primary Button" class="primary"></x-coda-button>
                            <x-coda-button label="Basic Button" class="basic"></x-coda-button>
                        </div>
                        <div class="ui divider section"></div>
                        <div class="ui horizontal list">
                            @foreach(config('aru2ka.ui.colors') as $color => $hex)
                            <div class="item">
                                <x-coda-button class="{{ $color }}">{{ $color }}</x-coda-button>
                            </div>
                            @endforeach
                        </div>
                        <div class="ui horizontal list">
                            @foreach(config('aru2ka.ui.colors') as $color => $hex)
                            <div class="item">
                                <x-coda-button class="{{ $color }} secondary">{{ $color }}</x-coda-button>
                            </div>
                            @endforeach
                        </div>
                        <div class="ui horizontal list">
                            @foreach(config('aru2ka.ui.colors') as $color => $hex)
                            <div class="item">
                                <x-coda-button class="{{ $color }} basic">{{ $color }}</x-coda-button>
                            </div>
                            @endforeach
                        </div>
                    </x-coda-panel>
                    <!-- end coda button -->

                    <div class="ui divider hidden"></div>

                    <!-- coda label  -->
                    <x-coda-panel title="Label">
                        <div class="ui horizontal list">
                            @foreach(config('aru2ka.ui.colors') as $color => $hex)
                            <div class="item">
                                <x-coda-label :color="'solid '.$color">{{ $color }}</x-coda-label>
                            </div>
                            @endforeach
                        </div>
                        <div class="ui horizontal list">
                            @foreach(config('aru2ka.ui.colors') as $color => $hex)
                            <div class="item">
                                <x-coda-label :color="$color">{{ $color }}</x-coda-label>
                            </div>
                            @endforeach
                        </div>
                        <div class="ui horizontal list">
                            @foreach(config('aru2ka.ui.colors') as $color => $hex)
                            <div class="item">
                                <x-coda-label :color="'basic '.$color">{{ $color }}</x-coda-label>
                            </div>
                            @endforeach
                        </div>
                        <div class="ui horizontal list">
                            @foreach(config('aru2ka.ui.colors') as $color => $hex)
                            <div class="item">
                                <x-coda-label :color="'circular empty '.$color"></x-coda-label>
                            </div>
                            @endforeach
                        </div>
                        <div class="divider"></div>
                        <div class="ui horizontal list">
                            @foreach(config('aru2ka.ui.colors') as $color => $hex)
                            <div class="item">
                                <x-coda-label :color="'circular empty basic '.$color"></x-coda-label>
                            </div>
                            @endforeach
                        </div>
                    </x-coda-panel>
                    <!-- end label -->

                    <div class="ui divider hidden"></div>

                    <!-- coda form -->
                    <x-coda-panel title="A form">
                        <form class="ui form">
                            <div class="field">
                                <label>First Name</label>
                                <input type="text" name="first-name" placeholder="First Name">
                            </div>
                            <div class="field">
                                <label>Last Name</label>
                                <input type="text" name="last-name" placeholder="Last Name">
                            </div>
                            <div class="field">
                                <label>Rupiah</label>
                                <div class="ui input labeled">
                                    <div class="ui label">Rp</div>
                                    <input type="text" name="rupiah1" data-role="rupiah">
                                </div>
                            </div>
                            <div class="field">
                                <label>Text</label>
                                <textarea></textarea>
                            </div>
                            <div class="field">
                                <label>Short Text</label>
                                <textarea rows="2"></textarea>
                            </div>
                            <div class="field">
                                <label>Single File Upload</label>
                                <div class="fileuploader fileuploader-theme-simple">
                                    <input type="file" class="uploader" data-limit="1" data-file-max-size="10000"
                                        name="avatar">
                                </div>
                            </div>

                            <div class="inline field">
                                <div class="ui checkbox">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                    <label>Checkbox</label>
                                </div>
                            </div>
                            <div class="inline field">
                                <div class="ui slider checkbox">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                    <label>Slider</label>
                                </div>
                                <label></label>
                            </div>
                            <div class="inline field">
                                <div class="ui toggle checkbox">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                    <label>Toggle</label>
                                </div>
                            </div>
                            <div class="inline fields">
                                <label for="fruit">Select your favorite fruit:</label>
                                <div class="field">
                                    <div class="ui radio checkbox checked">
                                        <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
                                        <label>Apples</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                                        <label>Oranges</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                                        <label>Pears</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                                        <label>Grapefruit</label>
                                    </div>
                                </div>
                            </div>
                            <div class="grouped fields">
                                <label for="fruit">Select your second favorite fruit:</label>
                                <div class="field">
                                    <div class="ui radio checkbox checked">
                                        <input type="radio" name="fruit2" checked="" tabindex="0" class="hidden">
                                        <label>Apples</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="fruit2" tabindex="0" class="hidden">
                                        <label>Oranges</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="fruit2" tabindex="0" class="hidden">
                                        <label>Pears</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" name="fruit2" tabindex="0" class="hidden">
                                        <label>Grapefruit</label>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label>Gender</label>
                                <div class="ui selection dropdown">
                                    <input type="hidden" name="gender">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Gender</div>
                                    <div class="menu">
                                        <div class="item" data-value="1">Male</div>
                                        <div class="item" data-value="0">Female</div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label>Country</label>
                                <select class="ui search dropdown">
                                    <option value="">Select Country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Réunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="field">
                                <label>Country</label>
                                <select multiple="" class="ui dropdown">
                                    <option value="">Select Country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Réunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="field">
                                <label>Date</label>
                                <div class="ui calendar">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Pick up a date" name="date">
                                    </div>
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label>Start date</label>
                                    <div class="ui calendar" id="rangestart">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Start">
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>End date</label>
                                    <div class="ui calendar" id="rangeend">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="End">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ui message">
                                <div class="header">We had some issues</div>
                                <ul class="list">
                                    <li>Please enter your first name</li>
                                    <li>Please enter your last name</li>
                                </ul>
                            </div>

                            <x-coda-button class="primary">Submit</x-coda-button>
                        </form>
                    </x-coda-panel>
                    <x-coda-panel title="Field Hints">
                        <form method="GET" action="" class="ui form horizontal">
                            <div class="field">
                                <label>Username</label><input type="text" name="field1">
                                <div class="hint">Minimal 6 karakter.</div>
                                <div class="hint">Hanya boleh huruf dan angka.</div>
                            </div>
                            <div class="field">
                                <label>Password</label><input type="password" name="password">
                                <div class="hint">Minimal 8 karakter.</div>
                                <div class="hint">Harus mengandung huruf, angka, dan karakter aneh.</div>
                            </div>
                        </form>
                    </x-coda-panel>
                    <div class="ui grid equal width">
                        <div class="column">
                            <x-coda-panel title="Horizontal Form">
                                <form method="GET" action="" class="ui form horizontal">
                                    <h3 class="ui horizontal divider section">Basic Info</h3>
                                    <div class="field"><label>Nama</label><input type="text" name="nama"></div>
                                    <div class="field">
                                        <label>Lokasi</label>
                                        <div class="ui dropdown search clearable selection">
                                            <select name="lokasi">
                                                <option value="0">Indonesia</option>
                                                <option value="1">Malaysia</option>
                                            </select>
                                            <i class="dropdown icon"></i><i class="remove icon"></i><input
                                                class="search" autocomplete="off" tabindex="0">
                                            <div class="text">Indonesia</div>
                                            <div class="menu" tabindex="-1">
                                                <div class="item active selected" data-value="0" data-text="Indonesia">
                                                    Indonesia</div>
                                                <div class="item" data-value="1" data-text="Malaysia">Malaysia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="ui horizontal divider section">Localization</h3>
                                    <div class="field">
                                        <label>Language</label>
                                        <div class="ui dropdown search clearable selection">
                                            <select name="language">
                                                <option value="0">Indonesia</option>
                                                <option value="1">Malaysia</option>
                                            </select>
                                            <i class="dropdown icon"></i><i class="remove icon"></i><input
                                                class="search" autocomplete="off" tabindex="0">
                                            <div class="text">Indonesia</div>
                                            <div class="menu" tabindex="-1">
                                                <div class="item active selected" data-value="0" data-text="Indonesia">
                                                    Indonesia</div>
                                                <div class="item" data-value="1" data-text="Malaysia">Malaysia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Timezone</label>
                                        <div class="ui dropdown search clearable selection">
                                            <select name="timezone">
                                                <option value="0">Indonesia</option>
                                                <option value="1">Malaysia</option>
                                            </select>
                                            <i class="dropdown icon"></i><i class="remove icon"></i><input
                                                class="search" autocomplete="off" tabindex="0">
                                            <div class="text">Indonesia</div>
                                            <div class="menu" tabindex="-1">
                                                <div class="item active selected" data-value="0" data-text="Indonesia">
                                                    Indonesia</div>
                                                <div class="item" data-value="1" data-text="Malaysia">Malaysia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="actions action pushed"><button type="submit" class="ui button primary"
                                            themed="">Simpan</button></div>
                                </form>
                            </x-coda-panel>
                        </div>
                        <div class="column">
                            <x-coda-panel title="Vertical Form">
                                <form method="GET" action="" class="ui form">
                                    <h3 class="ui horizontal divider section">Basic Info</h3>
                                    <div class="field"><label>Nama</label><input type="text" name="nama"></div>
                                    <div class="field">
                                        <label>Lokasi</label>
                                        <div class="ui dropdown search clearable selection">
                                            <select name="lokasi">
                                                <option value="0">Indonesia</option>
                                                <option value="1">Malaysia</option>
                                            </select>
                                            <i class="dropdown icon"></i><i class="remove icon"></i><input
                                                class="search" autocomplete="off" tabindex="0">
                                            <div class="text">Indonesia</div>
                                            <div class="menu" tabindex="-1">
                                                <div class="item active selected" data-value="0" data-text="Indonesia">
                                                    Indonesia</div>
                                                <div class="item" data-value="1" data-text="Malaysia">Malaysia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="ui horizontal divider section">Localization</h3>
                                    <div class="field">
                                        <label>Language</label>
                                        <div class="ui dropdown search clearable selection">
                                            <select multiple name="language">
                                                <option value="0">Indonesia</option>
                                                <option value="1">Malaysia</option>
                                            </select>
                                            <i class="dropdown icon"></i><i class="remove icon"></i><input
                                                class="search" autocomplete="off" tabindex="0">
                                            <div class="text">Indonesia</div>
                                            <div class="menu" tabindex="-1">
                                                <div class="item active selected" data-value="0" data-text="Indonesia">
                                                    Indonesia</div>
                                                <div class="item" data-value="1" data-text="Malaysia">Malaysia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Timezone</label>
                                        <div class="ui dropdown search clearable selection">
                                            <select name="timezone">
                                                <option value="0">Indonesia</option>
                                                <option value="1">Malaysia</option>
                                            </select>
                                            <i class="dropdown icon"></i><i class="remove icon"></i><input
                                                class="search" autocomplete="off" tabindex="0">
                                            <div class="text">Indonesia</div>
                                            <div class="menu" tabindex="-1">
                                                <div class="item active selected" data-value="0" data-text="Indonesia">
                                                    Indonesia</div>
                                                <div class="item" data-value="1" data-text="Malaysia">Malaysia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="ui button primary" themed="">Simpan</button>
                                    <div class="actions action pushed"></div>
                                </form>
                            </x-coda-panel>
                        </div>
                    </div>
                    <!-- end coda form -->

                    <x-coda-panel title="accordion">
                        <div class="ui styled fluid accordion">
                            <div class="title">
                                <i class="dropdown icon"></i>
                                What is a dog?
                            </div>
                            <div class="content">
                                <p class="transition hidden">A dog is a type of domesticated animal. Known for its
                                    loyalty and faithfulness, it can be found as a welcome guest in many households
                                    across the world.</p>
                            </div>
                            <div class="title">
                                <i class="dropdown icon"></i>
                                What kinds of dogs are there?
                            </div>
                            <div class="content">
                                <p>There are many breeds of dogs. Each breed varies in size and temperament. Owners
                                    often select a breed of dog that they find to be compatible with their own lifestyle
                                    and desires from a companion.</p>
                            </div>
                            <div class="title">
                                <i class="dropdown icon"></i>
                                How do you acquire a dog?
                            </div>
                            <div class="content">
                                <p>Three common ways for a prospective owner to acquire a dog is from pet shops, private
                                    owners, or shelters.</p>
                                <p>A pet shop may be the most convenient way to buy a dog. Buying a dog from a private
                                    owner allows you to assess the pedigree and upbringing of your dog before choosing
                                    to take it home. Lastly, finding your dog from a shelter, helps give a good home to
                                    a dog who may not find one so readily.</p>
                            </div>
                        </div>
                    </x-coda-panel>
                </div>
            </div>
        </main>
    </div>
    <script>
        $('.ui.calendar').calendar({
            type: 'date'
        });
        $('.ui.accordion')
            .accordion();

        $('#rangestart').calendar({
            type: 'date',
            endCalendar: $('#rangeend')
        });
        $('#rangeend').calendar({
            type: 'date',
            startCalendar: $('#rangestart')
        });

    </script>
</x-coda-app>
