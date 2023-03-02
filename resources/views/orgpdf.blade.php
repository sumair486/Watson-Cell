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
                <th>Organization</th>
                        <th>Donor</th>
                        <th>Number villages</th>
                        <th>District</th>
                        <th>Tehsil</th>
                        <th>Name of village council</th>
                        <th>Name of village</th>
                        <th>Map Latitude</th>
                        <th>Map Longititude</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($organization as $org)
                <tr>
                    <td>{{ucfirst($org->organization)}}</td>
                    <td>{{ucfirst($org->donor)}}</td>
                    <td>{{$org->number_of_targeted_villages}}</td>
                    <td>{{$org->district}}</td>
                    <td>{{$org->tehsil}}</td>
                    <td>{{$org->name_of_village_council}}</td>
                    <td>{{$org->name_of_village}}</td>
                    <td>{{$org->map_latitude}}</td>
                    <td>{{$org->map_longititude}}</td>

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
    /* border-bottom: 1px solid #dddddd; */
    text-align: center;
    font-size: 12px;
    border: 1px solid black;
    /* border-collapse: collapse; */
  }
</style>




