<template>
  <div>
    <page-toolbar
        @onClick="onClick"
        :items="toolbar_items"
    />

    <UserDataTable/>

    <NewUserDialog
        v-model="user_dialog"
        @cancel="closeDialogs"
        @save="AddUser"
    />
  </div>
</template>

<script>
  import ToolbarEvents from '../mixins/page-toolbar-events'
  import NewUserDialog from '../components/Users/NewUserDialog'
  import UserDataTable from '../components/Users/UsersDataTable'

  export default {
    name: 'users',
    components: {
      UserDataTable,
      NewUserDialog
    },
    mixins: [ToolbarEvents],
    data () {
      return {
        user_dialog: false,
        toolbar_items: [
          {
            name: 'add-user',
            item: 'Add User',
            icon: 'mdi-account-plus',
            color: 'secondary',
            onClick: () => {
              this.user_dialog = true;
            }
          },
          {
            name: 'suspend-user',
            item: 'Suspend',
            icon: 'mdi-pause-octagon-outline',
            color: 'warning',
            onClick: () => {
              this.user_dialog = true;
            }
          },
          {
            name: 'unsuspend-user',
            item: 'UnSuspend',
            icon: 'mdi-play',
            color: 'success',
            onClick: () => {
              this.user_dialog = true;
            }
          },
          {
            name: 'delete-user',
            item: 'Delete',
            icon: 'mdi-delete',
            color: 'error',
            onClick: () => {
              this.user_dialog = true;
            }
          },
        ]
      };
    },
    methods: {
      closeDialogs () {
        this.user_dialog = false;
      },
      AddUser (user) {
        console.log(user);
        this.closeDialogs();
      }
    }
  };
</script>
