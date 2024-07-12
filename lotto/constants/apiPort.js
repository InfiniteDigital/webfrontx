 function getDomainName(hostName) {
     return hostName.substring(hostName.lastIndexOf(".", hostName.lastIndexOf(".") - 1) + 1);
 }

 const uat = window.location.host == '127.0.0.1' ? 'http://127.0.0.1:11014' : `https://api.${getDomainName(window.location.host)}`;
 const urlBackend = `https://backed.${getDomainName(window.location.host)}`;
 const apiPort = {
     apiGetBalanceUser: uat + '/ApiGetBalanceUser',
     apiGetStockListLotto: uat + '/ApiGetStockListLotto',
     apiHistoryAward: uat + '/ApiHistoryAward',
     apiCheckRateNumber: uat + '/ApiCheckRateNumber',
     apiCheckRateNumberAgain: uat + '/ApiCheckRateNumberAgain',
     apiHistoryBetOrder: uat + '/ApiHistoryBetOrder',
     apiHistoryBetOrderDetail: uat + '/ApiHistoryBetOrderDetail',
     apiQueryLottoLimitMin: uat + '/ApiQueryLottoLimitMin',
     apiGetLottoNumberGroup: uat + '/ApiGetLottoNumberGroup',
     apiGetLottoNumberDetail: uat + '/ApiGetLottoNumberDetail',


 }