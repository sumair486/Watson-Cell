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
                <th>Male</th>
                <th>Female</th>
                <th>Number of total Men</th>
                <th>Number of total Woman</th>
                <th>Number of Disabled Benefeciares</th>
                <th>Challenges</th>
                <th>Lesson Learnt</th>
                <th>Name of Reporting Person</th>
                <th>phone no Reporting Person</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($benefeciaries as $benefeciarie)
                <tr>
                    <td>{{ucfirst($benefeciarie->male)}}</td>
                        <td>{{ucfirst($benefeciarie->female)}}</td>
                        <td>{{$benefeciarie->number_of_total_men}}</td>
                        <td>{{$benefeciarie->number_of_total_women}}</td>
                        <td>{{$benefeciarie->number_of_disabled_beneficiaries}}</td>
                        <td>{{$benefeciarie->challenges}}</td>
                        <td>{{$benefeciarie->lesson_learnt}}</td>
                        <td>{{$benefeciarie->name_of_reporting_person}}</td>
                        <td>{{$benefeciarie->phone_no_reporting_person}}</td>

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




