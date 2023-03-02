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
                <th>One Star</th>
                <th>Two Star</th>
                <th>Four Star</th>
                <th>Yes</th>
                <th>No</th>
                <th>Functional</th>
                <th>Non Functional</th>
                <th>Reasone in case of Non Functionality</th>
                <th>Number of total beneficiaries</th>
                <th>Male</th>
                <th>Female</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($schools as $school)
                <tr>
                        <td>{{ucfirst($school->one_star)}}</td>
                        <td>{{ucfirst($school->two_star)}}</td>
                        <td>{{$school->four_star}}</td>
                        <td>{{$school->yes}}</td>
                        <td>{{$school->no}}</td>
                        <td>{{$school->functional}}</td>
                        <td>{{$school->non_functional}}</td>
                        <td>{{$school->reasons_in_case_of_non_functionality}}</td>
                        <td>{{$school->number_of_total_beneficiaries}}</td>
                        <td>{{$school->male}}</td>
                        <td>{{$school->female}}</td>
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




