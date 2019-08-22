<template>
  <v-data-table
    v-model="selected"
    :headers="headers"
    :items="items"
    item-key="id"
    show-select
    class="packages-data-table elevation-1"
  >
    <template v-slot:item.disk="{ item }">
      <span v-if="item.disk === 0" class="green--text">Unlimited</span>
      <span v-else>{{ item.disk }}</span>
    </template>

    <template v-slot:item.web_domains="{ item }">
      <span v-if="item.web_domains === 0" class="green--text">Unlimited</span>
      <span v-else>{{ item.web_domains }}</span>
    </template>

    <template v-slot:item.mail_domains="{ item }">
      <span v-if="item.mail_domains === 0" class="green--text">Unlimited</span>
      <span v-else>{{ item.mail_domains }}</span>
    </template>

    <template v-slot:item.databases="{ item }">
      <span v-if="item.databases === 0" class="green--text">Unlimited</span>
      <span v-else>{{ item.databases }}</span>
    </template>

    <template v-slot:item.backups="{ item }">
      <span v-if="item.backups === 0" class="green--text">Unlimited</span>
      <span v-else>{{ item.backups }}</span>
    </template>
  </v-data-table>
</template>

<script>
  export default {
    name: 'packages-data-table',
    data () {
      return {
        selected: [],
        headers: [
          { text: 'Package ID #', align: 'left', value: 'id' },
          { text: 'Name', value: 'name' },
          { text: 'Disk', value: 'disk' },
          { text: 'Web Domains', value: 'web_domains' },
          { text: 'Mail Domains', value: 'mail_domains' },
          { text: 'Databases', value: 'databases' },
          { text: 'Backups', value: 'backups' },
        ],
        items: [
          { id: 1001, name: 'Basic', disk: 100, web_domains: 2, mail_domains: 5, databases: 5, backups: 2 },
          { id: 1002, name: 'Bronze', disk: 300, web_domains: 10, mail_domains: 20, databases: 10, backups: 10 },
          { id: 1003, name: 'Silver', disk: 500, web_domains: 20, mail_domains: 0, databases: 0, backups: 20 },
          { id: 1004, name: 'Gold', disk: 1000, web_domains: 0, mail_domains: 0, databases: 0, backups: 20 },
          { id: 1005, name: 'Platinum', disk: 1500, web_domains: 0, mail_domains: 0, databases: 0, backups: 20 },
        ]
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>
