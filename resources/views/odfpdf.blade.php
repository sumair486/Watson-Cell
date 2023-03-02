<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reports</title>
      </head>
      <body>
        <table class="table table-striped table-dark">
            <thead>
              <tr>

                        <th>Sustained</th>
                        <th>Revert</th>
                        <th>Reasons in case of Revert</th>
                        <th>Total Number of House Hold</th>
                        <th>Total Population of Village</th>
                        <th>Number of village During Triggering</th>
                        <th>Laterine Built by Community</th>
                        <th>Laterine Built by Organization</th>
              <tr>
                        <th>Number of Targeted School</th><br>
                        <th>School Name</th>
                        <th>Zero Star</th>
              </tr>
              </tr>
            </thead>
            <tbody>
                @foreach ($odfs as $odf)
                <tr>
                        <td>{{ucfirst($odf->sustained)}}</td>
                        <td>{{ucfirst($odf->revert)}}</td>
                        <td>{{$odf->reasons_in_case_of_revert}}</td>
                        <td>{{$odf->total_number_of_house_hold}}</td>
                        <td>{{$odf->total_population_of_village}}</td>
                        <td>{{$odf->number_of_laterine_in_village_during_tiggering}}</td>
                        <td>{{$odf->laterine_built_by_community}}</td>
                        <td>{{$odf->laterine_built_by_organization}}</td>
                        </tr>
                        <tr>
                        <td>{{$odf->number_of_targeted_schools}}</td>
                        <td>{{$odf->school_name}}</td>
                        <td>{{$odf->zero_star}}</td>

                </tr>
                @endforeach
            </tbody>
            <tfoot>

            </tfoot>
          </table>


<script>

<script src="{{asset('admin-assets')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin-assets')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="{{asset('admin-assets')}}/js/demo/datatables-demo.js"></script>

</script>

<style>
  table
  {

  }
  td
  {

    text-align: center;
    font-size: 10px;
    border: 1px solid black;
    width: 100%;
  }
</style>




