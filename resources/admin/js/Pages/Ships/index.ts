import { useIndex } from '@macramejs/macrame-vue3';
import { Ship } from '@admin/modules/resources';

export const table = useIndex<Ship>({
    route: '/admin/ships/items',
    syncUrl: true,
    defaultPerPage: 30, // deprecated
    sortBy: [],
});