<div class="col-12">

                    <!-- Stats Bar -->
    <div class="card">

                        <!-- Header -->
        <div class="card-header card-inverse" style="background-color: #6bbaa7; color: #fff;">
            <h5>Your Statistics</h5>
        </div>

                        <!-- Main Content -->
        <div class="card-block">
            <div class="card-deck">

                            <!-- Events Created -->
              <div class="card card-small">
                  <table class="size-5 full-table">
                      <tr class="text-center">
                          <td class="pt-3 pb-3 blue"><a href="/events"><span class="lnr lnr-bullhorn"></span></a></td>
                          <td class="stat">{{ Auth::user()->num_events }}</td>
                      </tr>
                  </table>
                  <div class="card-block m-0">
                      <h4 class="card-title text-center">Events Created</h4>
                  </div>
              </div>

                            <!-- Days Until Next Event -->
              <div class="card card-small">
                  <table class="size-5 full-table">
                      <tr class="text-center">
                          <td class="pt-3 pb-3 blue"><span class="lnr lnr-calendar-full"></span></td>
                          <td class="stat">
                            <?php
                                  // If the org has any events
                                  if(Auth::user()->num_events > 0) {
                                      // Save the date of the event
                                      $time = DB::table('events')->orderBy('starts', 'ASC')->first()->starts;
                                      echo timeUntil($time);

                                  }
                                  else {
                                      echo 0;
                                  }
                             ?>
                          </td>
                      </tr>
                  </table>
                  <div class="card-block">
                    <h4 class="card-title text-center">Until Next Event</h4>
                  </div>
              </div>

                            <!-- Number of People Attended -->
              <div class="card card-small">
                  <table class="size-5 full-table">
                      <tr class="text-center">
                          <td class="pt-3 pb-3 blue"><span class="lnr lnr-users"></span></td>
                          <td class="stat">
                              <?php
                                echo Auth::user()->num_people_events;
                              ?>
                          </td>
                      </tr>
                  </table>
                  <div class="card-block">
                    <h4 class="card-title text-center">Number of People Attended</h4>
                  </div>
              </div>

            </div>
        </div>
    </div>
</div>

                    <!-- Custom Styles -->
<style>
    .full-table {
        width: 100%;
    }

    .size-5 {
        font-size: 5em;
    }

    h4 {
        font-weight: 200;
    }

    h5 {
        font-weight: 200;
        margin: 0;
    }

    .blue {
        color: #6bbaa7 !important;
    }

    .stat {
        font-size: 0.8em;
    }

    .card-small {
        background: #3f3f3f !important;
    }
</style>
