$(document).ready(function () {
  $('.navbar-toggle').on('click', function () {
    $('.menu-block').slideToggle();
  });

  $('.tab-details .toggle').on('click', function () {
    $(this).toggleClass('active');
    $(this).parents('.tab-details').find('.deposit-list').slideToggle();
  });

  if ($(".risk-management").length > 0) {
    $(".risk-management").DataTable({
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
    });
  }

  if ($(".dashboard").length > 0) {
    $(".dashboard").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    oDashboardTable = $('.dashboard').DataTable();
    $('.input-search').keyup(function () {
      oDashboardTable.search($(this).val()).draw();
    });
  }


  if ($(".fm-associates-list").length > 0) {
    $(".fm-associates-list").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    FMAssociatesList = $('.fm-associates-list').DataTable();
    $('.fm-associates-list-block .input-search').keyup(function () {
      FMAssociatesList.search($(this).val()).draw();
    });
  }

  if ($(".fm-withdrawl-player-associates-list").length > 0) {
    $(".fm-withdrawl-player-associates-list").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    FMWithdrawlPlayerAssociatesList = $('.fm-withdrawl-player-associates-list').DataTable();
    $('.fm-withdrawl-player-associates-list-block .input-search').keyup(function () {
      FMWithdrawlPlayerAssociatesList.search($(this).val()).draw();
    });
  }

  if ($(".fm-deposit-player-associates-list").length > 0) {
    $(".fm-deposit-player-associates-list").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    FMDepositPlayerAssociatesList = $('.fm-deposit-player-associates-list').DataTable();
    $('.fm-deposit-player-associates-list-block .input-search').keyup(function () {
      FMDepositPlayerAssociatesList.search($(this).val()).draw();
    });
  }

  if ($(".fm-top-withdrawals").length > 0) {
    $(".fm-top-withdrawals").DataTable({
      responsive: true,
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
    });
  }

  if ($(".fm-top-deposit").length > 0) {
    $(".fm-top-deposit").DataTable({
      responsive: true,
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
    });
  }

  if ($(".fm-top-recent-deposit").length > 0) {
    $(".fm-top-recent-deposit").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    FMTopRecentDepositTable = $('.fm-top-recent-deposit').DataTable();
    $('.fm-top-recent-deposits-tab-block .input-search').keyup(function () {
      FMTopRecentDepositTable.search($(this).val()).draw();
    });
  }

  if ($(".fm-top-recent-withdrawals").length > 0) {
    $(".fm-top-recent-withdrawals").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    FMTopRecentWithdrawlTable = $('.fm-top-recent-withdrawals').DataTable();
    $('.fm-top-recent-withdrawals-tab-block .input-search').keyup(function () {
      FMTopRecentWithdrawlTable.search($(this).val()).draw();
    });
  }

  if ($(".fm-agent-list").length > 0) {
    $(".fm-agent-list").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    FMAgentListTable = $('.fm-agent-list').DataTable();
    $('.fm-agent-list-tab-block .input-search').keyup(function () {
      FMAgentListTable.search($(this).val()).draw();
    });
  }

  if ($(".agents").length > 0) {
    $(".agents").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    oAgentsTable = $('.agents').DataTable();
    $('.input-search').keyup(function () {
      oAgentsTable.search($(this).val()).draw();
    });
  }

  if ($(".players").length > 0) {
    $(".players").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    oPlayerTable = $('.players').DataTable();
    $('.om-sales-tab-block .input-search').keyup(function () {
      oPlayerTable.search($(this).val()).draw();
    });
  }

  if ($(".om-tasks").length > 0) {
    $(".om-tasks").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 10,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OMTasksTable = $('.om-tasks').DataTable();
    $('.om-sales-filter-block .input-search').keyup(function () {
      OMTasksTable.search($(this).val()).draw();
    });
  }

  if ($(".oa-tasks").length > 0) {
    $(".oa-tasks").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 10,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OATasksTable = $('.oa-tasks').DataTable();
    $('.oa-players-task-filter-block .input-search').keyup(function () {
      OATasksTable.search($(this).val()).draw();
    });
  }

  if ($(".om-players").length > 0) {
    $(".om-players").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 10,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OMPlayersTable = $('.om-players').DataTable();
    $('.om-players-tab-block .input-search').keyup(function () {
      OMPlayersTable.search($(this).val()).draw();
    });
  }

  if ($(".oa-players").length > 0) {
    $(".oa-players").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 10,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OAPlayersTable = $('.oa-players').DataTable();
    $('.oa-players-tab-block .input-search').keyup(function () {
      OAPlayersTable.search($(this).val()).draw();
    });
  }

  if ($(".om-transaction").length > 0) {
    $(".om-transaction").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 10,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OMTransactionTable = $('.om-transaction').DataTable();
    $('.om-sales-task-filter-block .input-search').keyup(function () {
      OMTransactionTable.search($(this).val()).draw();
    });
  }

  if ($(".om-sales-task").length > 0) {
    $(".om-sales-task").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OMSalesTaskTable = $('.om-sales-task').DataTable();
    $('.om-sales-task-filter-block .input-search').keyup(function () {
      OMSalesTaskTable.search($(this).val()).draw();
    });
  }

  if ($(".om-associates-list").length > 0) {
    $(".om-associates-list").DataTable({
      responsive: true,
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OMAssociatesListTable = $('.om-associates-list').DataTable();
    $('.om-associates-list-tab-bottom-block .input-search').keyup(function () {
      OMAssociatesListTable.search($(this).val()).draw();
    });
  }

  if ($(".om-agents-list").length > 0) {
    $(".om-agents-list").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OMAgentsListTable = $('.om-agents-list').DataTable();
    $('.om-agents-list-tab-bottom-block .input-search').keyup(function () {
      OMAgentsListTable.search($(this).val()).draw();
    });
  }

  if ($(".om-associates").length > 0) {
    $(".om-associates").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 10,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OMAssociatesTable = $('.om-associates').DataTable();
    $('.om-associates-tab-block .input-search').keyup(function () {
      OMAssociatesTable.search($(this).val()).draw();
    });
  }

  if ($(".om-agents").length > 0) {
    $(".om-agents").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 10,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OMAgentsTable = $('.om-agents').DataTable();
    $('.om-agents-tab-block .input-search').keyup(function () {
      OMAgentsTable.search($(this).val()).draw();
    });
  }

  if ($(".om-agent-reports").length > 0) {
    $(".om-agent-reports").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 10,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OMAgentsReportTable = $('.om-agent-reports').DataTable();
    $('.om-agent-reports-tab-block .input-search').keyup(function () {
      OMAgentsReportTable.search($(this).val()).draw();
    });
  }

  if ($(".om-players-reports").length > 0) {
    $(".om-players-reports").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 10,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OMPlayerssReportTable = $('.om-players-reports').DataTable();
    $('.om-players-reports-tab-block .input-search').keyup(function () {
      OMPlayerssReportTable.search($(this).val()).draw();
    });
  }

  if ($(".transaction").length > 0) {
    $(".transaction").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    oTransactionTable = $('.transaction').DataTable();
    $('.input-search').keyup(function () {
      oTransactionTable.search($(this).val()).draw();
    });
  }

  if ($(".om-player-transaction").length > 0) {
    $(".om-player-transaction").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    OMPlayerTransactionTable = $('.om-player-transaction').DataTable();
    $('.om-players-transaction .input-search').keyup(function () {
      OMPlayerTransactionTable.search($(this).val()).draw();
    });
  }

  if ($(".risk-flags").length > 0) {
    $(".risk-flags").DataTable({
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 4,
    });
  }

  if ($(".withdraw-bank-details").length > 0) {
    $(".withdraw-bank-details").DataTable({
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
    });
  }

  if ($(".withdrawal-requests").length > 0) {
    $(".withdrawal-requests").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    oWithdrawalRequestsTable = $('.withdrawal-requests').DataTable();
    $('.withdrawal-requests-block .input-search').keyup(function () {
      oWithdrawalRequestsTable.search($(this).val()).draw();
    });
  }

  if ($(".fm-deposit-requests").length > 0) {
    $(".fm-deposit-requests").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    FMDepositRequestsTable = $('.fm-deposit-requests').DataTable();
    $('.fm-deposit-requests-block .input-search').keyup(function () {
      FMDepositRequestsTable.search($(this).val()).draw();
    });
  }

  if ($(".fm-withdraw-requests").length > 0) {
    $(".fm-withdraw-requests").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    FMithdrawalRequestsTable = $('.fm-withdraw-requests').DataTable();
    $('.fm-withdraw-requests-block .input-search').keyup(function () {
      FMithdrawalRequestsTable.search($(this).val()).draw();
    });
  }

  if ($(".fm-agent-commission").length > 0) {
    $(".fm-agent-commission").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    FMagentCommissionTable = $('.fm-agent-commission').DataTable();
    $('.fm-agent-commission-block .input-search').keyup(function () {
      FMagentCommissionTable.search($(this).val()).draw();
    });
  }

  if ($(".fm-player-commission").length > 0) {
    $(".fm-player-commission").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    FMplayerCommissionTable = $('.fm-player-commission').DataTable();
    $('.fm-player-commission-block .input-search').keyup(function () {
      FMplayerCommissionTable.search($(this).val()).draw();
    });
  }

  if ($(".deposit-request").length > 0) {
    $(".deposit-request").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    oDepositRequestTable = $('.deposit-request').DataTable();
    $('.deposit-request-block .input-search').keyup(function () {
      oDepositRequestTable.search($(this).val()).draw();
    });
  }

  if ($(".utr-approver").length > 0) {
    $(".utr-approver").DataTable({
      searching: true,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
      dom: 'frtipB',
      buttons: [
        'csvHtml5'
      ]
    });

    oUTRApproverTable = $('.utr-approver').DataTable();
    $('.utr-approver-block .input-search').keyup(function () {
      oUTRApproverTable.search($(this).val()).draw();
    });
  }

  if ($(".inbounds").length > 0) {
    $(".inbounds").DataTable({
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 3,
    });
  }

  if ($(".tasks").length > 0) {
    $(".tasks").DataTable({
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 3,
    });
  }

  if ($(".sales-log").length > 0) {
    $(".sales-log").DataTable({
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 4,
    });
  }

  if ($(".agents-sales-log").length > 0) {
    $(".agents-sales-log").DataTable({
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 4,
    });
  }

  if ($(".big-wins").length > 0) {
    $(".big-wins").DataTable({
      responsive: true,
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
    });
  }

  if ($(".fm-big-wins").length > 0) {
    $(".fm-big-wins").DataTable({
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 4,
    });
  }

  if ($(".recent-withdrawals").length > 0) {
    $(".recent-withdrawals").DataTable({
      responsive: true,
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
    });
  }

  if ($(".om-sales-log").length > 0) {
    $(".om-sales-log").DataTable({
      responsive: true,
      paging: true,
      searching: false,
      bLengthChange: false,
      info: false,
      "pageLength": 5,
    });
  }

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
  });

  // Custom Dropdown
  $(".custom-dropdown ul").on("click", ".init", function () {
    $(this).closest("ul").children('li:not(.init)').toggle();
  });

  var allOptions = $(".custom-dropdown ul").children('li:not(.init)');
  $(".custom-dropdown ul").on("click", "li:not(.init)", function () {
    allOptions.removeClass('selected');
    $(this).addClass('selected');
    $("ul").children('.init').html($(this).html());
    allOptions.toggle();
  });

  if ($('.datepicker').length > 0) {
    $('.datepicker').datepicker({
      todayHighlight: true,
      orientation: 'bottom'
    });
  }

  if ($('.modal-datepicker').length > 0) {
    $('.modal-datepicker').datepicker({
      todayHighlight: true,
      orientation: 'bottom'
    }).on("show", function (e) {
      $('.datepicker').addClass('modal-datepicker')
    });
  }
});