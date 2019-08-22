<template>
  <v-data-table
    v-model="selected"
    :headers="headers"
    :items="items"
    single-expand
    :expanded.sync="expanded"
    show-expand
    item-key="id"
    show-select
    class="user-data-table elevation-1"
  >
    <template v-slot:expanded-item="{ headers, item }">
      <td :colspan="headers.length" class="expanded-data">
        <v-container fluid>
          <v-row dense>
            <v-col cols="12"
                   sm="6"
                   md="6"
                   lg="6"
            >
              <v-list dense>
                <v-list-item>
                  <v-list-item-content>Web Domains:</v-list-item-content>
                  <v-list-item-content>{{ item.domains }} / {{ item.domains_total }}</v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-content>Email Domains:</v-list-item-content>
                  <v-list-item-content>{{ item.emails }} / {{ item.emails_total }}</v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-content>DNS Domains:</v-list-item-content>
                  <v-list-item-content>{{ item.dns_domains }} / {{ item.dns_total }}</v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-content>Databases:</v-list-item-content>
                  <v-list-item-content>{{ item.databases }} / {{ item.databases_total }}</v-list-item-content>
                </v-list-item>
              </v-list>
            </v-col>

            <v-col cols="12"
                   sm="6"
                   md="6"
                   lg="6"
            >
              <v-list dense>
                <v-list-item>
                  <v-list-item-content>Disk:</v-list-item-content>
                  <v-list-item-content>
                    {{ item.disk_space }}mb / {{ item.disk_space_total === 0 ? 'Unlimited' : item.disk_space_total +
                    'mb' }}
                  </v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-content>Package:</v-list-item-content>
                  <v-list-item-content>{{ item.package_name }}</v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-content>SSH:</v-list-item-content>
                  <v-list-item-content>{{ item.ssh_shell }}</v-list-item-content>
                </v-list-item>
                <v-list-item>
                  <v-list-item-content>Backups:</v-list-item-content>
                  <v-list-item-content>{{ item.backups }} / {{ item.backups_total }}</v-list-item-content>
                </v-list-item>
              </v-list>
            </v-col>
          </v-row>
        </v-container>
      </td>
    </template>
  </v-data-table>
</template>

<script>
  export default {
    name: 'user-data-table',
    data () {
      return {
        expanded: [],
        selected: [],
        headers: [
          { text: 'User ID #', align: 'left', value: 'id' },
          { text: 'Username', value: 'username' },
          { text: 'First Name', value: 'first_name' },
          { text: 'Last Name', value: 'last_name' },
          { text: 'Package', value: 'package_name' },
        ],
        items: this.$store.getters['users/users']
      }
    }
  }
</script>

<style lang="scss" scoped>
  .expanded-data {
    background-color: #607D8B;
  }
</style>
