{% extends "layout.twig" %}

{% block title %}Employee List{% endblock %}
{% block placeholder %}
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Employee List</h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Active Employees
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Department(s)</th>
                        <th>Work Type</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for employee in emp %}
                    <tr class="odd gradeX">
                        <td>{{ employee.name }}</td>
                        <td>{{ employee.designation_name}}</td>
                        <td>{{ employee.department_name}}</td>
                        <td>{{ employee.work_time }}</td>
                        <td style="text-align: right"><span class="glyphicon glyphicon-usd" >{{ employee.salary}}</span></td>
                        <td style="text-align: right">
                            <a href="#"><span class="glyphicon glyphicon-eye-open" data-toggle="tooltip" title="View"></span></a>
                            <a href="#"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit" style="color: grey"></span></a>
                            <a href="#"><span class="glyphicon glyphicon-remove" data-toggle="tooltip" title="Remove" style="color: red"></span></a>
                        </td>
                    </tr>
                    {% endfor %}

                    </tbody>
                </table>

                {% endblock %}