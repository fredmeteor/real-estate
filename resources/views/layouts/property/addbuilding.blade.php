<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Property - RealProperty</title>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/bootstrap.css"> {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600|Kanit:300,300i,400,400i,500,500i,600"
        rel="stylesheet">
    <style>
        #map {
            height: 300px;
        }
    </style>
</head>

<body>
    @include('results.navresult')
    <br>
    <div class="title has-text-centered">Add Your Building</div>
    <br>
    <div class="container">
        <div class="columns is-mobile is-centered">
            <div class="column is-8">
    @include('layouts.errors') @if(session()->has('message'))
                <div class="notification is-success">
                    <button class="delete"></button>
                    <h1 class="is-size-5"><b> {{ session()->get('message') }}</b></h1>
                </div>
                @endif
            </div>
        </div>

        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <label for="name">Property Name</label>
                            <input class="input is-primary" type="text" name="name">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Property Type</label>
                            <br>
                            <div class="select is-primary is-full">
                                <select name="type">
                                    <option value="Building">Building</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Property Price <strong>(Rs.)</strong></label>
                            <input class="input is-primary" type="text" name="amount">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">City</label>
                            <br>
                            <div class="select is-primary is-full">
                                <select name="city">
                                    <option>Ambalangoda</option>
                                    <option>Ampara</option>
                                    <option>Anuradhapura</option>
                                    <option>Avissawella</option>
                                    <option>Badulla</option>
                                    <option>Balangoda</option>
                                    <option>Bandarawela</option>
                                    <option>Batticaloa</option>
                                    <option>Beruwala</option>
                                    <option>Chavakacheri</option>
                                    <option>Chilaw</option>
                                    <option>Colombo</option>
                                    <option>Dambulla</option>
                                    <option>Dehiwala-Mount Lavinia</option>
                                    <option>Embilipitiya</option>
                                    <option>Eravur</option>
                                    <option>Galle</option>
                                    <option>Gampaha</option>
                                    <option>Gampola</option>
                                    <option>Hambantota</option>
                                    <option>Haputale</option>
                                    <option>Harispattuwa</option>
                                    <option>Hatton</option>
                                    <option>Horana</option>
                                    <option>Ja-Ela</option>
                                    <option>Jaffna</option>
                                    <option>Kadugannawa</option>
                                    <option>Kalmunai</option>
                                    <option>Kalutara</option>
                                    <option>Kandy</option>
                                    <option>Kattankudy</option>
                                    <option>Katunayake</option>
                                    <option>Kegalle</option>
                                    <option>Kelaniya</option>
                                    <option>Kolonnawa</option>
                                    <option>Kuliyapitiya</option>
                                    <option>Kurunegala</option>
                                    <option>Mannar</option>
                                    <option>Matale</option>
                                    <option>Matara</option>
                                    <option>Minuwangoda</option>
                                    <option>Moneragala</option>
                                    <option>Moratuwa</option>
                                    <option>Nawalapitiya</option>
                                    <option>Negombo</option>
                                    <option>Nuwara Eliya</option>
                                    <option>Panadura</option>
                                    <option>Peliyagoda</option>
                                    <option>Point Pedro</option>
                                    <option>Puttalam</option>
                                    <option>Ratnapura</option>
                                    <option>Sri Jayawardenapura Kotte</option>
                                    <option>Talawakele</option>
                                    <option>Tangalle</option>
                                    <option>Trincomalee</option>
                                    <option>Valvettithurai</option>
                                    <option>Vavuniya</option>
                                    <option>Wattala</option>
                                    <option>Wattegama</option>
                                    <option>Weligama</option>
                        </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Postal Code</label>
                            <input class="input is-primary" type="text" name="postalcode">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Province</label>
                            <br>
                            <div class="select is-primary is-full">
                                <select name="province">
                                        <option value="Central">Central</option>
                                        <option value="Eastern">Eastern</option>
                                        <option value="North Central">North Central</option>
                                        <option value="North Western">North Western</option>
                                        <option value="Northern">Northern</option>
                                        <option value="Sabaragamuwa">Sabaragamuwa</option>
                                        <option value="Southern">Southern</option>
                                        <option value="Uva">Uva</option>
                                        <option value="Western">Western</option>
                                    </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <label for="name">Property Description</label>
                            <textarea name="description" class="textarea is-primary"></textarea>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Contact No</label>
                            <input class="input is-primary" type="text" name="contactno">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Contact Email</label>
                            <input class="input is-primary" type="text" name="contactemail" value="{{Auth::user()->email}}">
                        </div>
                    </div>
                    {{-- Image Upload Section --}}
                    <div class="field">
                        <div class="control">
                            <label for="img">Images <strong class="is-small">(Tip: Upload more the one photograph [Max Image Size: 4MB])</strong></label>
                            <div class="input-group control-group increment">
                                <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn">
                                    <button class="button is-success addmore" type="button"><i class="glyphicon glyphicon-plus"></i>More</button>
                                </div>
                            </div>

                            <div class="clone hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="filename[]" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="button is-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control maphere">
                            <label for="name">Set Location: Google Maps</label>
                            <input class="input is-primary" type="text" id="searchmap">
                            <div id="map" class="column"></div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Latitude</label>
                            <input class="input is-primary" type="text" name="lat" id="lat">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Longitude</label>
                            <input class="input is-primary" type="text" name="lng" id="lng">
                        </div>
                    </div>
                </div>
                {{-- next column start here --}}
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <label for="name">Agreement Type</label>
                            <br>
                            <div class="select is-primary">
                                <select name="agreement">
                                    <option value="sale">Sale</option>
                                    <option value="lease" selected>Lease</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">No of Floors</label>
                            <input class="input is-primary" type="number" name="floor">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Floor Size(Square Feet)</label>
                            <input class="input is-primary" type="number" name="floorsize">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Lift</label>
                            <br>
                            <div class="select is-primary">
                                <select name="lift">
                                        <option value="Available">Available</option>
                                        <option value="Not Available" selected>Not Available</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Car Park</label>
                            <br>
                            <div class="select is-primary">
                                <select name="carpark">
                                        <option value="Available">Available</option>
                                        <option value="Not Available" selected>Not Available</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Nearest School</label>
                            <input class="input is-primary" type="text" name="nschool">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Nearest Railway</label>
                            <input class="input is-primary" type="text" name="nrailway">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label for="name">Nearest BusStop</label>
                            <input class="input is-primary" type="text" name="nbus">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control is-pulled-right">
                            <button type="submit" class="button is-primary">
                               Add Building
                            </button>
                            <button type="reset" class="button is-warning">
                                    Clear
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <br>
    <br>
    </div>
    {{-- Footer --}}
    @include('layouts.footer') {{-- JavaScript Files --}}
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>s
    <script>
        tinymce.init({ selector:'textarea' });
    </script>
    <script>
        var map;
            function initAutocomplete() {
                map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 6.9814435, lng: 81.0741583},
                zoom: 15
                });

                var marker = new google.maps.Marker({
                position: {lat: 6.9814435, lng: 81.0741583},
                map: map,
                draggable: true,
                });

                var input = document.getElementById('searchmap');
                var searchBox = new google.maps.places.SearchBox(input);
                //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                google.maps.event.addListener(searchBox,'places_changed',function(){
                    var places = searchBox.getPlaces();
                    var bounds = new google.maps.LatLngBounds();
                    var i, place;
                    for (i = 0; place=places[i]; i++) {
                        bounds.extend(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                        
                    }

                    map.fitBounds(bounds);
                    map.setZoom(15);
                });

                google.maps.event.addListener(marker,'position_changed',function(){
                    var lat = marker.getPosition().lat();
                    var lng = marker.getPosition().lng();

                    $('#lat').val(lat);
                    $('#lng').val(lng);
                });
            }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKNG_uMsCgUvpLc_Adr2n9nwo6BWOImoM&libraries=places&callback=initAutocomplete"
        async defer></script>
    <script type="text/javascript">
        $(document).ready(function() {
    
          $(".addmore").click(function(){ 
              var html = $(".clone").html();
              $(".increment").after(html);
          });
    
          $("body").on("click",".is-danger",function(){ 
              $(this).parents(".control-group").remove();
          });
    
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                $notification = $delete.parentNode;
                $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });
    </script>
</body>

</html>