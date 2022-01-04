export type Resource<Model> = {data: Model};
export type CollectionResource<Model> = {data: Model[]};

export type DateTime = {
    readable_diff: string
}

export type Ship = {
    id: number,
    name: string,
    active: boolean,
    created_at: DateTime
}

export type Cruise = {
    id: number,
    ship_id: number,
    departure_at: {
        date: string,
        readable_date: string
    },
    return_at: {
        date: string,
        readable_date: string,
    },
    created_at: DateTime,
    updated_at: DateTime,
}

export type State = {
    label: string,
    value: string,
}

export type DateTimesResource = Resource<DateTime>;
export type StatesResource = Resource<State>;