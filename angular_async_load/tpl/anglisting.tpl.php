<div ng-app="nodeListing">

  <div ng-controller="ListController">

    <h3>Filter</h3>
    <input ng-model="search" ng-change="doSearch()">

    <ul style="margin:0;padding:0;">
      <li style="list-style:none; margin-bottom:10px;" ng-repeat="node in nodes"><button class="btn btn-sm" ng-click="open(node.nid)">Open in modal</button> {{ node.title }}</li>
    </ul>

    <script type="text/ng-template" id="nodeModalTpl">
      <h3>{{ loadedNode.title }}</h3>
      {{ loadedNode.body }}
    </script>

  </div>

</div>