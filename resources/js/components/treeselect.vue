<!-- Vue SFC -->
<template>
  <div id="app">
    <treeselect v-model="value" :multiple="true" :options="options"   :disable-branch-nodes="true"
  :show-count="true"
    :flatten-search-results="true"
  placeholder="مثال : iPhone 6s" />
  </div>
</template>

<script>
  // import the component
  import Treeselect from '@riophae/vue-treeselect'
  // import the styles
  import '@riophae/vue-treeselect/dist/vue-treeselect.css'

  export default {
    // register the component
    components: { Treeselect },
    props()  {
        disableBranchNodes: true;
        autoLoadRootOptions: true;
    },
    data() {
      return {
        // define the default value
        value: null,
        // define options
        options: [ {
          id: 'a',
          label: 'iPhone',
          children: [ {
            id: 'aa',
            label: '11 Pro Max',
          }, {
            id: 'ab',
            label: '11 Pro',
          },
          {
            id: 'ab',
            label: '11',
          },
          {
            id: 'ab',
            label: 'XR',
          },
          {
            id: 'ab',
            label: 'XS Max',
          },
          {
            id: 'ab',
            label: 'XS',
          },
          {
            id: 'ab',
            label: 'X',
          },
          {
            id: 'ab',
            label: '8 Plus',
          },
          {
            id: 'ab',
            label: '8',
          },
          {
            id: 'ab',
            label: '7 Plus',
          },
          {
            id: 'ab',
            label: '7',
          },
          {
            id: 'ab',
            label: 'SE',
          },
          {
            id: 'ab',
            label: '6S Plus',
          },
          {
            id: 'ab',
            label: '6S',
          },
          {
            id: 'ab',
            label: '6 Plus',
          },
          {
            id: 'ab',
            label: '6',
          },
          {
            id: 'ab',
            label: '5S',
          },
          {
            id: 'ab',
            label: '5C',
          },
          {
            id: 'ab',
            label: '5',
          },
          {
            id: 'ab',
            label: '4S',
          },
          {
            id: 'ab',
            label: '4',
          }],
        },

        {
          id: 'b',
          label: 'iPad',
        }, {
          id: 'c',
          label: 'MacBook',
        } ],
      }
    },
  }
</script>
