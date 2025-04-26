public class LicenseA extends Licenses {

    public LicenseA(int cost, int duration, String description) {
        super(10000, 50, "Motorcycles");
    }

    public float calculate() {
        return this.getCost() * this.getDuration();
    }
}
