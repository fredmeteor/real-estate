<div class="column displaybox profileback">
        @include('profile.navprofile')
        <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
            <ul>
                <li><a href="/profile">Profile</a></li>
                <li class="is-active"><a href="/profile">Dashboard</a></li>
            </ul>
        </nav>
        <div class="column profileback tableshow">
          <div class="title is-5 has-text-success">Recent Offers</div>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Pro. ID</th>
                <th>Pro. Name</th>
                <th>Pro. Location</th>
                <th>Pro. Type</th>
                <th>Offer</th>
                <th>Offered User</th>
                <th>Contact</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                  <th>No</th>
                  <th>Pro. ID</th>
                  <th>Pro. Name</th>
                  <th>Pro. Location</th>
                  <th>Pro. Type</th>
                  <th>Current Offer</th>
                  <th>Offered User</th>
                  <th>Contact</th>
              </tr>
            </tfoot>
            <tbody>
              @if(count($offers))
                  @foreach ($offers as $key=>$offer)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$offer->property_id}}</td>
                    <td>{{$offer->property->name}}</td>
                    <td>{{$offer->property->city}}</td>
                    <td>{{$offer->property->type}}</td>
                    <td>{{$offer->offerAmount}}</td>
                    <td>{{$offer->property->user->name}}</td>
                    <td><a href="" class="button is-success nounnounderlinebtn">Contact</a></td>
                  </tr>
                @endforeach
              @else
              <tr>
                  <td class="has-text-danger">No Result</td>
                  <td class="has-text-danger">No Result</td>
                  <td class="has-text-danger">No Result</td>
                  <td class="has-text-danger">No Result</td>
                  <td class="has-text-danger">No Result</td>
                  <td class="has-text-danger">No Result</td>
                  <td class="has-text-danger">No Result</td>
                  <td><a href="" class="button is-success disabled nounnounderlinebtn" disabled>Contact</a></td>
                </tr>
              @endif
            </tbody>
          </table>
          {{ $offers->links() }}
        </div>
    </div>