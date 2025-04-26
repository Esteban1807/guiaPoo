public class LicenseC extends Licenses {

    public LicenseC(int cost, int duration, String description) {
        super(50000, 150, "Public service vehicles");
    }

    public float calculate() {
        return this.getCost() * this.getDuration();
    }
}
