  <footer>
      <div class="main">
          <div class="tablet">
              <img src="{{asset("images/brand.png")}}" alt="the logo">
              <ul>
                  <li><a id="aboutUs" href="">AboutUs</a></li>
                  <li><a id="parkingList" href="">Parking List</a></li>
                  @if (Auth::check())
                  <li><a id="destination" href="">Destination</a></li>
                  <li><a id="spotme" href="">Spot Me<a></li>
                  @endif
              </ul>
              <p> <a id="api" href="https://datapublic.lu/fr/">data.public.lu</a>
                  <br>
                  La plate-forme de données luxembourgeoise</p>
          </div>
          <p id="madeBy">Made by Brenda Cayzac,Cyriaque Yedagne, David da Mota, Johnny Diasand Sridevi Jagannathan</p>
      </div>
  </footer>