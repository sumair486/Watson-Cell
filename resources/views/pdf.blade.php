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
                <<th>CLTS</th>
                <th>SLTS</th>
                <th>Activity Start Date</th>
                <th>Activity End Date</th>
                <th>Triggering</th>
                <th>Declaration</th>
                <th>Verification</th>
                <th>Certification</th>
                <th>Yes</th>
                <th>No</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($activitys as $activty)
                <tr>
                    <<td>{{ucfirst($activty->clts)}}</td>
                    <td>{{ucfirst($activty->slts)}}</td>
                    <td>{{$activty->activity_start_date}}</td>
                    <td>{{$activty->activity_end_date}}</td>
                    <td>{{$activty->triggering}}</td>
                    <td>{{$activty->declaration}}</td>
                    <td>{{$activty->verification}}</td>
                    <td>{{$activty->certification}}</td>
                    <td>{{$activty->yes}}</td>
                    <td>{{$activty->No}}</td>

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




